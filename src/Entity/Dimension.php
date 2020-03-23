<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DimensionRepository")
 */
class Dimension
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $largeur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $profondeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $unite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLongueur(): ?float
    {
        return $this->longueur;
    }

    public function setLongueur(?float $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getLargeur(): ?float
    {
        return $this->largeur;
    }

    public function setLargeur(?float $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getProfondeur(): ?float
    {
        return $this->profondeur;
    }

    public function setProfondeur(?float $profondeur): self
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(string $unite): self
    {
        $this->unite = $unite;

        return $this;
    }
}
