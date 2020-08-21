<?php

namespace App\Entity;

use App\Repository\MonthRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MonthRepository::class)
 */
class Month
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $label;

    /**
     * @ORM\ManyToMany(targetEntity=Vegetables::class, inversedBy="months")
     */
    private $vegetable;

    /**
     * @ORM\ManyToMany(targetEntity=Fruits::class, inversedBy="months")
     */
    private $Fruits;

    /**
     * @ORM\ManyToMany(targetEntity=Aromates::class, inversedBy="months")
     */
    private $Aromates;

    public function __construct()
    {
        $this->vegetable = new ArrayCollection();
        $this->Fruits = new ArrayCollection();
        $this->Aromates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Vegetables[]
     */
    public function getVegetable(): Collection
    {
        return $this->vegetable;
    }

    public function addVegetable(Vegetables $vegetable): self
    {
        if (!$this->vegetable->contains($vegetable)) {
            $this->vegetable[] = $vegetable;
        }

        return $this;
    }

    public function removeVegetable(Vegetables $vegetable): self
    {
        if ($this->vegetable->contains($vegetable)) {
            $this->vegetable->removeElement($vegetable);
        }

        return $this;
    }

    /**
     * @return Collection|Fruits[]
     */
    public function getFruits(): Collection
    {
        return $this->Fruits;
    }

    public function addFruit(Fruits $fruit): self
    {
        if (!$this->Fruits->contains($fruit)) {
            $this->Fruits[] = $fruit;
        }

        return $this;
    }

    public function removeFruit(Fruits $fruit): self
    {
        if ($this->Fruits->contains($fruit)) {
            $this->Fruits->removeElement($fruit);
        }

        return $this;
    }

    /**
     * @return Collection|Aromates[]
     */
    public function getAromates(): Collection
    {
        return $this->Aromates;
    }

    public function addAromate(Aromates $aromate): self
    {
        if (!$this->Aromates->contains($aromate)) {
            $this->Aromates[] = $aromate;
        }

        return $this;
    }

    public function removeAromate(Aromates $aromate): self
    {
        if ($this->Aromates->contains($aromate)) {
            $this->Aromates->removeElement($aromate);
        }

        return $this;
    }

}