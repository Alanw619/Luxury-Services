<?php

namespace App\Entity;

use App\Repository\JobTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobTypeRepository::class)
 */
class JobType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=JobOffer::class, mappedBy="job_type", orphanRemoval=true)
     */
    private $types;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function __construct()
    {
        $this->types = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|JobOffer[]
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }

    public function addType(JobOffer $type): self
    {
        if (!$this->types->contains($type)) {
            $this->types[] = $type;
            $type->setJobType($this);
        }

        return $this;
    }

    public function removeType(JobOffer $type): self
    {
        if ($this->types->removeElement($type)) {
            // set the owning side to null (unless already changed)
            if ($type->getJobType() === $this) {
                $type->setJobType(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
