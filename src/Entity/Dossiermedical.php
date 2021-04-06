<?php

namespace App\Entity;
use App\Repository\DossiermedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 * @ORM\Entity(repositoryClass=DossiermedicalRepository::class)
 * @ApiResource()
 */
class Dossiermedical
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
    private $Num_dossier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_patient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom_patient;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_naissance;

    /**
     * @ORM\Column(type="integer")
     */
    private $Age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sexe;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Poids;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_diabete;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Deligation_residence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Telephone1;

    /**
     * @ORM\Column(type="integer")
     */
    private $Telephone2;

    /**
     * @ORM\OneToMany(targetEntity=AnalyseType1::class, mappedBy="dossiermedical")
     */
    private $AnalyseType1;

    public function __construct()
    {
        $this->AnalyseType1 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumDossier(): ?string
    {
        return $this->Num_dossier;
    }

    public function setNumDossier(string $Num_dossier): self
    {
        $this->Num_dossier = $Num_dossier;

        return $this;
    }

    public function getNomPatient(): ?string
    {
        return $this->Nom_patient;
    }

    public function setNomPatient(string $Nom_patient): self
    {
        $this->Nom_patient = $Nom_patient;

        return $this;
    }

    public function getPrenomPatient(): ?string
    {
        return $this->Prenom_patient;
    }

    public function setPrenomPatient(string $Prenom_patient): self
    {
        $this->Prenom_patient = $Prenom_patient;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->Date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $Date_naissance): self
    {
        $this->Date_naissance = $Date_naissance;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(string $Sexe): self
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->Poids;
    }

    public function setPoids(?float $Poids): self
    {
        $this->Poids = $Poids;

        return $this;
    }

    public function getTypeDiabete(): ?string
    {
        return $this->Type_diabete;
    }

    public function setTypeDiabete(string $Type_diabete): self
    {
        $this->Type_diabete = $Type_diabete;

        return $this;
    }

    public function getDeligationResidence(): ?string
    {
        return $this->Deligation_residence;
    }

    public function setDeligationResidence(string $Deligation_residence): self
    {
        $this->Deligation_residence = $Deligation_residence;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelephone1(): ?int
    {
        return $this->Telephone1;
    }

    public function setTelephone1(int $Telephone1): self
    {
        $this->Telephone1 = $Telephone1;

        return $this;
    }

    public function getTelephone2(): ?int
    {
        return $this->Telephone2;
    }

    public function setTelephone2(int $Telephone2): self
    {
        $this->Telephone2 = $Telephone2;

        return $this;
    }

    /**
     * @return Collection|AnalyseType1[]
     */
    public function getAnalyseType1(): Collection
    {
        return $this->AnalyseType1;
    }

    public function addAnalyseType1(AnalyseType1 $analyseType1): self
    {
        if (!$this->AnalyseType1->contains($analyseType1)) {
            $this->AnalyseType1[] = $analyseType1;
            $analyseType1->setDossiermedical($this);
        }

        return $this;
    }

    public function removeAnalyseType1(AnalyseType1 $analyseType1): self
    {
        if ($this->AnalyseType1->removeElement($analyseType1)) {
            // set the owning side to null (unless already changed)
            if ($analyseType1->getDossiermedical() === $this) {
                $analyseType1->setDossiermedical(null);
            }
        }

        return $this;
    }
}
