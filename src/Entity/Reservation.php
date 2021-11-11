<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $nbr_personne;

    /**
     * @ORM\ManyToOne(targetEntity=Sousservice::class)
     */
    private $sousservice;

    /**
     * @ORM\ManyToOne(targetEntity=Centresdebeaute::class)
     */
    private $centresdebeaute;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrPersonne(): ?string
    {
        return $this->nbr_personne;
    }

    public function setNbrPersonne(string $nbr_personne): self
    {
        $this->nbr_personne = $nbr_personne;

        return $this;
    }

    public function getSousservice(): ?Sousservice
    {
        return $this->sousservice;
    }

    public function setSousservice(?Sousservice $sousservice): self
    {
        $this->sousservice = $sousservice;

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
