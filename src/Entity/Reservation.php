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
     * @ORM\ManyToOne(targetEntity=Centresdebeaute::class)
     */
    private $centresdebeaute;

    /**
     * @ORM\ManyToOne(targetEntity=Servicelilia::class)
     */
    private $servicelilia;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_personne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_date;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Liliabenaziza::class)
     */
    private $liliabenaziza;

    /**
     * @ORM\ManyToOne(targetEntity=Serviceviolette::class)
     */
    private $serviceviolette;

    /**
     * @ORM\ManyToOne(targetEntity=Servicemahassen::class)
     */
    private $servicemahassen;

    /**
     * @ORM\ManyToOne(targetEntity=Servicefleurdelys::class)
     */
    private $servicefleurdelys;

    

    public function getId(): ?int
    {
        return $this->id;
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

    public function getServicelilia(): ?Servicelilia
    {
        return $this->servicelilia;
    }

    public function setServicelilia(?Servicelilia $servicelilia): self
    {
        $this->servicelilia = $servicelilia;

        return $this;
    }

    public function getNbrPersonne(): ?int
    {
        return $this->nbr_personne;
    }

    public function setNbrPersonne(int $nbr_personne): self
    {
        $this->nbr_personne = $nbr_personne;

        return $this;
    }

    public function getNomUser(): ?string
    {
        return $this->nom_user;
    }

    public function setNomUser(string $nom_user): self
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

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

    public function getLiliabenaziza(): ?Liliabenaziza
    {
        return $this->liliabenaziza;
    }

    public function setLiliabenaziza(?Liliabenaziza $liliabenaziza): self
    {
        $this->liliabenaziza = $liliabenaziza;

        return $this;
    }

    public function getServiceviolette(): ?Serviceviolette
    {
        return $this->serviceviolette;
    }

    public function setServiceviolette(?Serviceviolette $serviceviolette): self
    {
        $this->serviceviolette = $serviceviolette;

        return $this;
    }

    public function getServicemahassen(): ?Servicemahassen
    {
        return $this->servicemahassen;
    }

    public function setServicemahassen(?Servicemahassen $servicemahassen): self
    {
        $this->servicemahassen = $servicemahassen;

        return $this;
    }

    public function getServicefleurdelys(): ?Servicefleurdelys
    {
        return $this->servicefleurdelys;
    }

    public function setServicefleurdelys(?Servicefleurdelys $servicefleurdelys): self
    {
        $this->servicefleurdelys = $servicefleurdelys;

        return $this;
    }

}
