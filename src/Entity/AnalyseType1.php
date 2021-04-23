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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Creneau;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $Heure_Analyse;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Resultat;

    /**
     * @ORM\ManyToOne(targetEntity=Dossiermedical::class, inversedBy="AnalyseType1")
     */
    private $dossiermedical;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreneau(): ?string
    {
        return $this->Creneau;
    }

    public function setCreneau(?string $Creneau): self
    {
        $this->Creneau = $Creneau;

        return $this;
    }

    public function getHeureAnalyse(): ?\DateTimeInterface
    {
        return $this->Heure_Analyse;
    }

    public function setHeureAnalyse(?\DateTimeInterface $Heure_Analyse): self
    {
        $this->Heure_Analyse = $Heure_Analyse;

        return $this;
    }

    public function getResultat(): ?float
    {
        return $this->Resultat;
    }

    public function setResultat(?float $Resultat): self
    {
        $this->Resultat = $Resultat;

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
