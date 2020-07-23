<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
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
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Entree::class, mappedBy="menu")
     */
    private $entree;

    /**
     * @ORM\OneToMany(targetEntity=Plat::class, mappedBy="menu")
     */
    private $plat;

    /**
     * @ORM\OneToMany(targetEntity=Dessert::class, mappedBy="menu")
     */
    private $dessert;

    public function __construct()
    {
        $this->entree = new ArrayCollection();
        $this->plat = new ArrayCollection();
        $this->dessert = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Entree[]
     */
    public function getEntree(): Collection
    {
        return $this->entree;
    }

    public function addEntree(Entree $entree): self
    {
        if (!$this->entree->contains($entree)) {
            $this->entree[] = $entree;
            $entree->setMenu($this);
        }

        return $this;
    }

    public function removeEntree(Entree $entree): self
    {
        if ($this->entree->contains($entree)) {
            $this->entree->removeElement($entree);
            // set the owning side to null (unless already changed)
            if ($entree->getMenu() === $this) {
                $entree->setMenu(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Plat[]
     */
    public function getPlat(): Collection
    {
        return $this->plat;
    }

    public function addPlat(Plat $plat): self
    {
        if (!$this->plat->contains($plat)) {
            $this->plat[] = $plat;
            $plat->setMenu($this);
        }

        return $this;
    }

    public function removePlat(Plat $plat): self
    {
        if ($this->plat->contains($plat)) {
            $this->plat->removeElement($plat);
            // set the owning side to null (unless already changed)
            if ($plat->getMenu() === $this) {
                $plat->setMenu(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Dessert[]
     */
    public function getDessert(): Collection
    {
        return $this->dessert;
    }

    public function addDessert(Dessert $dessert): self
    {
        if (!$this->dessert->contains($dessert)) {
            $this->dessert[] = $dessert;
            $dessert->setMenu($this);
        }

        return $this;
    }

    public function removeDessert(Dessert $dessert): self
    {
        if ($this->dessert->contains($dessert)) {
            $this->dessert->removeElement($dessert);
            // set the owning side to null (unless already changed)
            if ($dessert->getMenu() === $this) {
                $dessert->setMenu(null);
            }
        }

        return $this;
    }
}
