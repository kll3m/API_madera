<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
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
    private $labelPlan;

    /**
     * @ORM\Column(type="date")
     */
    private $datePlan;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabelPlan(): ?string
    {
        return $this->labelPlan;
    }

    public function setLabelPlan(string $labelPlan): self
    {
        $this->labelPlan = $labelPlan;

        return $this;
    }

    public function getDatePlan(): ?\DateTimeInterface
    {
        return $this->datePlan;
    }

    public function setDatePlan(\DateTimeInterface $datePlan): self
    {
        $this->datePlan = $datePlan;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
