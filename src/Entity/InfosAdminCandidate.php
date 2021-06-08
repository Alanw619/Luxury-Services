<?php

namespace App\Entity;

use App\Repository\InfosAdminCandidateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfosAdminCandidateRepository::class)
 */
class InfosAdminCandidate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $created_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $deleted_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $files;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->created_date;
    }

    public function setCreatedDate(\DateTimeInterface $created_date): self
    {
        $this->created_date = $created_date;

        return $this;
    }

    public function getDeletedDate(): ?\DateTimeInterface
    {
        return $this->deleted_date;
    }

    public function setDeletedDate(\DateTimeInterface $deleted_date): self
    {
        $this->deleted_date = $deleted_date;

        return $this;
    }

    public function getFiles(): ?string
    {
        return $this->files;
    }

    public function setFiles(string $files): self
    {
        $this->files = $files;

        return $this;
    }
}
