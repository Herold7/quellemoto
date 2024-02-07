<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SpecialityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpecialityRepository::class)]
#[ApiResource]
class Speciality
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nda = null;

    #[ORM\Column(length: 255)]
    private ?string $siret = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNda(): ?string
    {
        return $this->nda;
    }

    public function setNda(string $nda): static
    {
        $this->nda = $nda;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): static
    {
        $this->siret = $siret;

        return $this;
    }
}
