<?php

namespace App\Entity;

use App\Repository\ActividadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActividadRepository::class)]
class Actividad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $idMonitor1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $idMonitor2 = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getIdMonitor1(): ?int
    {
        return $this->idMonitor1;
    }

    public function setIdMonitor1(int $idMonitor1): static
    {
        $this->idMonitor1 = $idMonitor1;

        return $this;
    }

    public function getIdMonitor2(): ?int
    {
        return $this->idMonitor2;
    }

    public function setIdMonitor2(?int $idMonitor2): static
    {
        $this->idMonitor2 = $idMonitor2;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }
}
