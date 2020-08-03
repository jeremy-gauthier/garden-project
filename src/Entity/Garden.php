<?php

namespace App\Entity;

use App\Repository\GardenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GardenRepository::class)
 */
class Garden
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
    private $plant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dayPlant;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dayRecolt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlant(): ?string
    {
        return $this->plant;
    }

    public function setPlant(string $plant): self
    {
        $this->plant = $plant;

        return $this;
    }

    public function getDayPlant(): ?\DateTimeInterface
    {
        return $this->dayPlant;
    }

    public function setDayPlant(\DateTimeInterface $dayPlant): self
    {
        $this->dayPlant = $dayPlant;

        return $this;
    }

    public function getDayRecolt(): ?\DateTimeInterface
    {
        return $this->dayRecolt;
    }

    public function setDayRecolt(?\DateTimeInterface $dayRecolt): self
    {
        $this->dayRecolt = $dayRecolt;

        return $this;
    }
}
