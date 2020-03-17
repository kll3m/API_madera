<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\GammeRepository")
 */
class Gamme
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
    private $nomGamme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeIsolant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeFinition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCouverture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $qualiteHuisserie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGamme(): ?string
    {
        return $this->nomGamme;
    }

    public function setNomGamme(string $nomGamme): self
    {
        $this->nomGamme = $nomGamme;

        return $this;
    }

    public function getTypeIsolant(): ?string
    {
        return $this->typeIsolant;
    }

    public function setTypeIsolant(string $typeIsolant): self
    {
        $this->typeIsolant = $typeIsolant;

        return $this;
    }

    public function getTypeFinition(): ?string
    {
        return $this->typeFinition;
    }

    public function setTypeFinition(string $typeFinition): self
    {
        $this->typeFinition = $typeFinition;

        return $this;
    }

    public function getTypeCouverture(): ?string
    {
        return $this->typeCouverture;
    }

    public function setTypeCouverture(string $typeCouverture): self
    {
        $this->typeCouverture = $typeCouverture;

        return $this;
    }

    public function getQualiteHuisserie(): ?string
    {
        return $this->qualiteHuisserie;
    }

    public function setQualiteHuisserie(string $qualiteHuisserie): self
    {
        $this->qualiteHuisserie = $qualiteHuisserie;

        return $this;
    }
}
