<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date_RDV;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Raison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statuts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRDV(): ?\DateTimeInterface
    {
        return $this->Date_RDV;
    }

    public function setDateRDV(\DateTimeInterface $Date_RDV): self
    {
        $this->Date_RDV = $Date_RDV;

        return $this;
    }

    public function getRaison(): ?string
    {
        return $this->Raison;
    }

    public function setRaison(?string $Raison): self
    {
        $this->Raison = $Raison;

        return $this;
    }

    public function getStatuts(): ?string
    {
        return $this->Statuts;
    }

    public function setStatuts(string $Statuts): self
    {
        $this->Statuts = $Statuts;

        return $this;
    }
}
