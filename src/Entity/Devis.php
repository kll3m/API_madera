<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DevisRepository")
 */
class Devis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etatDevis;

    /**
     * @ORM\Column(type="float")
     */
    private $totalHT;

    /**
     * @ORM\Column(type="float")
     */
    private $totalTTC;

    /**
     * @ORM\Column(type="float")
     */
    private $tauxRemise;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Projet", cascade={"persist", "remove"})
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatDevis(): ?string
    {
        return $this->etatDevis;
    }

    public function setEtatDevis(string $etatDevis): self
    {
        $this->etatDevis = $etatDevis;

        return $this;
    }

    public function getTotalHT(): ?float
    {
        return $this->totalHT;
    }

    public function setTotalHT(float $totalHT): self
    {
        $this->totalHT = $totalHT;

        return $this;
    }

    public function getTotalTTC(): ?float
    {
        return $this->totalTTC;
    }

    public function setTotalTTC(float $totalTTC): self
    {
        $this->totalTTC = $totalTTC;

        return $this;
    }

    public function getTauxRemise(): ?float
    {
        return $this->tauxRemise;
    }

    public function setTauxRemise(float $tauxRemise): self
    {
        $this->tauxRemise = $tauxRemise;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): self
    {
        $this->projet = $projet;

        return $this;
    }
}
