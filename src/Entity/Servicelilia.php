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

    /**
     * @ORM\Column(type="boolean")
     */
    private $promo;

    /**
     * @ORM\ManyToOne(targetEntity=Centresdebeaute::class)
     */
    private $centresdebeaute;

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

    public function getPromo(): ?bool
    {
        return $this->promo;
    }

    public function setPromo(bool $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getCentresdebeaute(): ?Centresdebeaute
    {
        return $this->centresdebeaute;
    }

    public function setCentresdebeaute(?Centresdebeaute $centresdebeaute): self
    {
        $this->centresdebeaute = $centresdebeaute;

        return $this;
    }
}
