<?php

namespace App\Entity;

use App\Repository\ServicefleurdelysRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicefleurdelysRepository::class)
 */
class Servicefleurdelys
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=Fleurdelys::class)
     */
    private $fleurdelys;

    /**
     * @ORM\ManyToOne(targetEntity=Services::class)
     */
    private $services;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getFleurdelys(): ?Fleurdelys
    {
        return $this->fleurdelys;
    }

    public function setFleurdelys(?Fleurdelys $fleurdelys): self
    {
        $this->fleurdelys = $fleurdelys;

        return $this;
    }

    public function getServices(): ?Services
    {
        return $this->services;
    }

    public function setServices(?Services $services): self
    {
        $this->services = $services;

        return $this;
    }
}
