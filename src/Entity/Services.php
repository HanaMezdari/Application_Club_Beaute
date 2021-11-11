<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicesRepository::class)
 */
class Services
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
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Centresdebeaute::class)
     */
    private $centresdebeaute;

    /**
     * @ORM\ManyToMany(targetEntity=Sousservice::class, mappedBy="services")
     */
    private $no;

    /**
     * @ORM\ManyToMany(targetEntity=Sousservice::class, mappedBy="services")
     */
    private $sousservices;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function __construct()
    {
        $this->no = new ArrayCollection();
        $this->sousservices = new ArrayCollection();
    }

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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
    public function __toString() {
        return $this->nom;
    }

    /**
     * @return Collection|Sousservice[]
     */
    public function getNo(): Collection
    {
        return $this->no;
    }

    public function addNo(Sousservice $no): self
    {
        if (!$this->no->contains($no)) {
            $this->no[] = $no;
            $no->addService($this);
        }

        return $this;
    }

    public function removeNo(Sousservice $no): self
    {
        if ($this->no->removeElement($no)) {
            $no->removeService($this);
        }

        return $this;
    }

    /**
     * @return Collection|Sousservice[]
     */
    public function getSousservices(): Collection
    {
        return $this->sousservices;
    }

    public function addSousservice(Sousservice $sousservice): self
    {
        if (!$this->sousservices->contains($sousservice)) {
            $this->sousservices[] = $sousservice;
            $sousservice->addService($this);
        }

        return $this;
    }

    public function removeSousservice(Sousservice $sousservice): self
    {
        if ($this->sousservices->removeElement($sousservice)) {
            $sousservice->removeService($this);
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    
}
