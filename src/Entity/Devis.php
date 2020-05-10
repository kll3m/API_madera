<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255)
     */
    private $totalHT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $totalTTC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taux_remise;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $projet_id;



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

    public function setTotalHT(string $totalHT): self
    {
        $this->totalHT = $totalHT;

        return $this;
    }

    public function getTotalTTC(): ?string
    {
        return $this->totalTTC;
    }

    public function setTotalTTC(string $totalTTC): self
    {
        $this->totalTTC = $totalTTC;

        return $this;
    }

    public function getTauxRemise(): ?string
    {
        return $this->taux_remise;
    }

    public function setTauxRemise(string $taux_remise): self
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

    public function getProjetId(): ?string
    {
        return $this->projet_id;
    }

    public function setProjetId(?string $projet_id): self
    {
        $this->projet_id = $projet_id;

        return $this;
    }


}
