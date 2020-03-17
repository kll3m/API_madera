<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
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
    private $nomClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenomClient;
    }

    public function setPrenomClient(string $prenomClient): self
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    public function getAdresseClient(): ?string
    {
        return $this->adresseClient;
    }

    public function setAdresseClient(string $adresseClient): self
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    public function getCpClient(): ?string
    {
        return $this->cpClient;
    }

    public function setCpClient(string $cpClient): self
    {
        $this->cpClient = $cpClient;

        return $this;
    }

    public function getVilleClient(): ?string
    {
        return $this->villeClient;
    }

    public function setVilleClient(string $villeClient): self
    {
        $this->villeClient = $villeClient;

        return $this;
    }

    public function getEmailClient(): ?string
    {
        return $this->emailClient;
    }

    public function setEmailClient(string $emailClient): self
    {
        $this->emailClient = $emailClient;

        return $this;
    }

    public function getTelClient(): ?string
    {
        return $this->telClient;
    }

    public function setTelClient(string $telClient): self
    {
        $this->telClient = $telClient;

        return $this;
    }
}
