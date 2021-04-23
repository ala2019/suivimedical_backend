<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AnalyseType2Repository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=AnalyseType2Repository::class)
 */
class AnalyseType2 
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
    private $Taux_HbA1c;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\ManyToOne(targetEntity=Dossiermedical::class, inversedBy="AnalyseType2")
     */
    private $dossiermedical;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTauxHbA1c(): ?string
    {
        return $this->Taux_HbA1c;
    }

    public function setTauxHbA1c(?string $Taux_HbA1c): self
    {
        $this->Taux_HbA1c = $Taux_HbA1c;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

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
