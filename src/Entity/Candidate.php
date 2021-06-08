<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidateRepository::class)
 */
class Candidate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $passport;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $curriculum_vitae;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $profil_picture;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $current_location;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_of_birth;


     /**
      * @ORM\ManyToOne(targetEntity=Experience::class)
      */
     private $experience;

     /**
      * @ORM\OneToOne(targetEntity=InfosAdminCandidate::class, cascade={"persist", "remove"})
      * @ORM\JoinColumn(nullable=false)
      */
     private $info_admin_candidate;

     /**
      * @ORM\OneToOne(targetEntity=User::class, mappedBy="candidat", cascade={"persist", "remove"})
      */
     private $user;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPassport(): ?string
    {
        return $this->passport;
    }

    public function setPassport(string $passport): self
    {
        $this->passport = $passport;

        return $this;
    }

    public function getCurriculumVitae(): ?string
    {
        return $this->curriculum_vitae;
    }

    public function setCurriculumVitae(string $curriculum_vitae): self
    {
        $this->curriculum_vitae = $curriculum_vitae;

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profil_picture;
    }

    public function setProfilPicture(string $profil_picture): self
    {
        $this->profil_picture = $profil_picture;

        return $this;
    }

    public function getCurrentLocation(): ?string
    {
        return $this->current_location;
    }

    public function setCurrentLocation(string $current_location): self
    {
        $this->current_location = $current_location;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }


    public function getExperience(): ?Experience
    {
        return $this->experience;
    }

    public function setExperience(?Experience $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getInfoAdminCandidate(): ?InfosAdminCandidate
    {
        return $this->info_admin_candidate;
    }

    public function setInfoAdminCandidate(InfosAdminCandidate $info_admin_candidate): self
    {
        $this->info_admin_candidate = $info_admin_candidate;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        // set the owning side of the relation if necessary
        if ($user->getCandidat() !== $this) {
            $user->setCandidat($this);
        }

        $this->user = $user;

        return $this;
    }


}
