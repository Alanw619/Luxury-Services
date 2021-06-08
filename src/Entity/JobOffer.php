<?php

namespace App\Entity;

use App\Repository\JobOfferRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobOfferRepository::class)
 */
class JobOffer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="jobOffers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $closing_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="date")
     */
    private $date_of_creation;

    /**
     * @ORM\ManyToOne(targetEntity=JobType::class, inversedBy="types")
     * @ORM\JoinColumn(nullable=false)
     */
    private $job_type;

    /**
     * @ORM\ManyToOne(targetEntity=JobCategory::class, inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $job_category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getActiver(): ?bool
    {
        return $this->activer;
    }

    public function setActiver(bool $activer): self
    {
        $this->activer = $activer;

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

    public function getJobTitle(): ?string
    {
        return $this->job_title;
    }

    public function setJobTitle(string $job_title): self
    {
        $this->job_title = $job_title;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getClosingDate(): ?\DateTimeInterface
    {
        return $this->closing_date;
    }

    public function setClosingDate(?\DateTimeInterface $closing_date): self
    {
        $this->closing_date = $closing_date;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(?string $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getDateOfCreation(): ?\DateTimeInterface
    {
        return $this->date_of_creation;
    }

    public function setDateOfCreation(\DateTimeInterface $date_of_creation): self
    {
        $this->date_of_creation = $date_of_creation;

        return $this;
    }

    public function getJobType(): ?JobType
    {
        return $this->job_type;
    }

    public function setJobType(?JobType $job_type): self
    {
        $this->job_type = $job_type;

        return $this;
    }

    public function getJobCategory(): ?JobCategory
    {
        return $this->job_category;
    }

    public function setJobCategory(?JobCategory $job_category): self
    {
        $this->job_category = $job_category;

        return $this;
    }
}
