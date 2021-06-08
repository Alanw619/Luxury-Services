<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_of_society;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_of_activity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_of_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $position_occupied_by_the_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number_of_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_of_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notes;

    /**
     * @ORM\OneToMany(targetEntity=JobOffer::class, mappedBy="client", orphanRemoval=true)
     */
    private $jobOffers;

    public function __construct()
    {
        $this->jobOffers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameOfSociety(): ?string
    {
        return $this->name_of_society;
    }

    public function setNameOfSociety(string $name_of_society): self
    {
        $this->name_of_society = $name_of_society;

        return $this;
    }

    public function getTypeOfActivity(): ?string
    {
        return $this->type_of_activity;
    }

    public function setTypeOfActivity(string $type_of_activity): self
    {
        $this->type_of_activity = $type_of_activity;

        return $this;
    }

    public function getNameOfContact(): ?string
    {
        return $this->name_of_contact;
    }

    public function setNameOfContact(string $name_of_contact): self
    {
        $this->name_of_contact = $name_of_contact;

        return $this;
    }

    public function getPositionOccupiedByTheContact(): ?string
    {
        return $this->position_occupied_by_the_contact;
    }

    public function setPositionOccupiedByTheContact(string $position_occupied_by_the_contact): self
    {
        $this->position_occupied_by_the_contact = $position_occupied_by_the_contact;

        return $this;
    }

    public function getNumberOfContact(): ?string
    {
        return $this->number_of_contact;
    }

    public function setNumberOfContact(string $number_of_contact): self
    {
        $this->number_of_contact = $number_of_contact;

        return $this;
    }

    public function getEmailOfContact(): ?string
    {
        return $this->email_of_contact;
    }

    public function setEmailOfContact(string $email_of_contact): self
    {
        $this->email_of_contact = $email_of_contact;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return Collection|JobOffer[]
     */
    public function getJobOffers(): Collection
    {
        return $this->jobOffers;
    }

    public function addJobOffer(JobOffer $jobOffer): self
    {
        if (!$this->jobOffers->contains($jobOffer)) {
            $this->jobOffers[] = $jobOffer;
            $jobOffer->setClient($this);
        }

        return $this;
    }

    public function removeJobOffer(JobOffer $jobOffer): self
    {
        if ($this->jobOffers->removeElement($jobOffer)) {
            // set the owning side to null (unless already changed)
            if ($jobOffer->getClient() === $this) {
                $jobOffer->setClient(null);
            }
        }

        return $this;
    }
}
