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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalHT;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalTTC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tauxRemise;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_projet;

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

    public function getTotalHT(): ?string
    {
        return $this->totalHT;
    }

    public function setTotalHT(?string $totalHT): self
    {
        $this->totalHT = $totalHT;

        return $this;
    }

    public function getTotalTTC(): ?string
    {
        return $this->totalTTC;
    }

    public function setTotalTTC(?string $totalTTC): self
    {
        $this->totalTTC = $totalTTC;

        return $this;
    }

    public function getTauxRemise(): ?string
    {
        return $this->tauxRemise;
    }

    public function setTauxRemise(?string $tauxRemise): self
    {
        $this->tauxRemise = $tauxRemise;

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

    public function getIdProjet(): ?string
    {
        return $this->id_projet;
    }

    public function setIdProjet(?string $id_projet): self
    {
        $this->id_projet = $id_projet;

        return $this;
    }
}
