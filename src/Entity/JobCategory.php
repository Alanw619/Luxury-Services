<?php

namespace App\Entity;

use App\Repository\JobCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobCategoryRepository::class)
 */
class JobCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=JobOffer::class, mappedBy="job_category", orphanRemoval=true)
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|JobOffer[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(JobOffer $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setJobCategory($this);
        }

        return $this;
    }

    public function removeCategory(JobOffer $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getJobCategory() === $this) {
                $category->setJobCategory(null);
            }
        }

        return $this;
    }
}
