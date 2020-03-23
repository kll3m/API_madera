<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ModuleRepository")
 */
class Module
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
    private $nomModule;

    /**
     * @ORM\Column(type="float")
     */
    private $margeEntreprise;

    /**
     * @ORM\Column(type="float")
     */
    private $margeCommerciaux;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projet")
     */
    private $projet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Gamme")
     */
    private $gamme;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Dimension")
     */
    private $dimension;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomModule(): ?string
    {
        return $this->nomModule;
    }

    public function setNomModule(string $nomModule): self
    {
        $this->nomModule = $nomModule;

        return $this;
    }

    public function getMargeEntreprise(): ?float
    {
        return $this->margeEntreprise;
    }

    public function setMargeEntreprise(float $margeEntreprise): self
    {
        $this->margeEntreprise = $margeEntreprise;

        return $this;
    }

    public function getMargeCommerciaux(): ?float
    {
        return $this->margeCommerciaux;
    }

    public function setMargeCommerciaux(float $margeCommerciaux): self
    {
        $this->margeCommerciaux = $margeCommerciaux;

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

    public function getGamme(): ?Gamme
    {
        return $this->gamme;
    }

    public function setGamme(?Gamme $gamme): self
    {
        $this->gamme = $gamme;

        return $this;
    }

    public function getDimension(): ?Dimension
    {
        return $this->dimension;
    }

    public function setDimension(?Dimension $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }
}
