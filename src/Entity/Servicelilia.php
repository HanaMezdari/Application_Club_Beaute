<?php

namespace App\Entity;

use App\Repository\ServiceliliaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceliliaRepository::class)
 */
class Servicelilia
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
     * @ORM\ManyToOne(targetEntity=Liliabenaziza::class)
     */
    private $liliabenaziza;

    /**
     * @ORM\ManyToOne(targetEntity=Services::class)
     */
    private $servicelilia;

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

    public function getLiliabenaziza(): ?Liliabenaziza
    {
        return $this->liliabenaziza;
    }

    public function setLiliabenaziza(?Liliabenaziza $liliabenaziza): self
    {
        $this->liliabenaziza = $liliabenaziza;

        return $this;
    }

    public function getServicelilia(): ?Services
    {
        return $this->servicelilia;
    }

    public function setServicelilia(?Services $servicelilia): self
    {
        $this->servicelilia = $servicelilia;

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
