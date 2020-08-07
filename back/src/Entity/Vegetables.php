<?php

namespace App\Entity;

use App\Repository\VegetablesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=VegetablesRepository::class)
 */
class Vegetables
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"vegetables:list"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"vegetables:list"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $semi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $recolt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $exposition;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $sol;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $watering;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"vegetables:list"})
     */
    private $advice;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"vegetables:list"})
     */
    private $QuantityPlant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getSemi(): ?string
    {
        return $this->semi;
    }

    public function setSemi(?string $semi): self
    {
        $this->semi = $semi;

        return $this;
    }

    public function getRecolt(): ?string
    {
        return $this->recolt;
    }

    public function setRecolt(?string $recolt): self
    {
        $this->recolt = $recolt;

        return $this;
    }

    public function getExposition(): ?string
    {
        return $this->exposition;
    }

    public function setExposition(?string $exposition): self
    {
        $this->exposition = $exposition;

        return $this;
    }

    public function getSol(): ?string
    {
        return $this->sol;
    }

    public function setSol(?string $sol): self
    {
        $this->sol = $sol;

        return $this;
    }

    public function getWatering(): ?string
    {
        return $this->watering;
    }

    public function setWatering(?string $watering): self
    {
        $this->watering = $watering;

        return $this;
    }

    public function getAdvice(): ?string
    {
        return $this->advice;
    }

    public function setAdvice(?string $advice): self
    {
        $this->advice = $advice;

        return $this;
    }

    public function getQuantityPlant(): ?int
    {
        return $this->QuantityPlant;
    }

    public function setQuantityPlant(int $QuantityPlant): self
    {
        $this->QuantityPlant = $QuantityPlant;

        return $this;
    }
}
