<?php

namespace App\Entity;

use App\Repository\ServicevioletteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicevioletteRepository::class)
 */
class Serviceviolette
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
     * @ORM\ManyToOne(targetEntity=Violette::class)
     */
    private $violette;

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

    public function getViolette(): ?Violette
    {
        return $this->violette;
    }

    public function setViolette(?Violette $violette): self
    {
        $this->violette = $violette;

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
