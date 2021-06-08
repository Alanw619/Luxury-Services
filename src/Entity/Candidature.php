<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Candidate::class)
     */
    private $candidat_id;

    /**
     * @ORM\ManyToOne(targetEntity=JobOffer::class)
     */
    private $offer_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidatId(): ?Candidate
    {
        return $this->candidat_id;
    }

    public function setCandidatId(?Candidate $candidat_id): self
    {
        $this->candidat_id = $candidat_id;

        return $this;
    }

    public function getOfferId(): ?JobOffer
    {
        return $this->offer_id;
    }

    public function setOfferId(?JobOffer $offer_id): self
    {
        $this->offer_id = $offer_id;

        return $this;
    }
}
