<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ComposantRepository")
 */
class Composant
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
    private $nomComposant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $familleComposant;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Dimension", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dimension;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\GestionStock", cascade={"persist", "remove"})
     */
    private $gestionStock;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComposant(): ?string
    {
        return $this->nomComposant;
    }

    public function setNomComposant(string $nomComposant): self
    {
        $this->nomComposant = $nomComposant;

        return $this;
    }

    public function getFamilleComposant(): ?string
    {
        return $this->familleComposant;
    }

    public function setFamilleComposant(string $familleComposant): self
    {
        $this->familleComposant = $familleComposant;

        return $this;
    }

    public function getDimension(): ?Dimension
    {
        return $this->dimension;
    }

    public function setDimension(Dimension $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getGestionStock(): ?GestionStock
    {
        return $this->gestionStock;
    }

    public function setGestionStock(?GestionStock $gestionStock): self
    {
        $this->gestionStock = $gestionStock;

        return $this;
    }
}
