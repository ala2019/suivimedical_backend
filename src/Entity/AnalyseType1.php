<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AnalyseType1Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=AnalyseType1Repository::class)
 */
class AnalyseType1
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $DateAnalyse;

    /**
     * @ORM\Column(type="datetime")
     */
    private $HeureAnalyse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Creneau;

    /**
     * @ORM\Column(type="float")
     */
    private $Resultat;

    /**
     * @ORM\Column(type="float")
     */
    private $Confirmer_Resultat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Notes;

    /**
     * @ORM\ManyToOne(targetEntity=Dossiermedical::class, inversedBy="AnalyseType1")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dossiermedical;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAnalyse(): ?\DateTimeInterface
    {
        return $this->DateAnalyse;
    }

    public function setDateAnalyse(\DateTimeInterface $DateAnalyse): self
    {
        $this->DateAnalyse = $DateAnalyse;

        return $this;
    }

    public function getHeureAnalyse(): ?\DateTimeInterface
    {
        return $this->HeureAnalyse;
    }

    public function setHeureAnalyse(\DateTimeInterface $HeureAnalyse): self
    {
        $this->HeureAnalyse = $HeureAnalyse;

        return $this;
    }

    public function getCreneau(): ?string
    {
        return $this->Creneau;
    }

    public function setCreneau(string $Creneau): self
    {
        $this->Creneau = $Creneau;

        return $this;
    }

    public function getResultat(): ?float
    {
        return $this->Resultat;
    }

    public function setResultat(float $Resultat): self
    {
        $this->Resultat = $Resultat;

        return $this;
    }

    public function getConfirmerResultat(): ?float
    {
        return $this->Confirmer_Resultat;
    }

    public function setConfirmerResultat(float $Confirmer_Resultat): self
    {
        $this->Confirmer_Resultat = $Confirmer_Resultat;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->Notes;
    }

    public function setNotes(?string $Notes): self
    {
        $this->Notes = $Notes;

        return $this;
    }

    public function getDossiermedical(): ?Dossiermedical
    {
        return $this->dossiermedical;
    }

    public function setDossiermedical(?Dossiermedical $dossiermedical): self
    {
        $this->dossiermedical = $dossiermedical;

        return $this;
    }
}
