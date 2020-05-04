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
    private $nom_devis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat_devis;

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
    private $taux_remise;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Projet", cascade={"persist", "remove"})
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDevis(): ?string
    {
        return $this->nom_devis;
    }

    public function setNomDevis(string $nom_devis): self
    {
        $this->nom_devis = $nom_devis;

        return $this;
    }

    public function getEtatDevis(): ?string
    {
        return $this->etat_devis;
    }

    public function setEtatDevis(string $etat_devis): self
    {
        $this->etat_devis = $etat_devis;

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
        return $this->taux_remise;
    }

    public function setTauxRemise(float $taux_remise): self
    {
        $this->taux_remise = $taux_remise;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

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
