<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(targetEntity: Associer::class, mappedBy: 'club')]
    private Collection $associers;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(targetEntity: Maillot::class, mappedBy: 'club')]
    private Collection $maillots;

    #[ORM\ManyToOne(inversedBy: 'clubs')]
    private ?Categorie $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->associers = new ArrayCollection();
        $this->maillots = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Associer>
     */
    public function getAssociers(): Collection
    {
        return $this->associers;
    }

    public function addAssocier(Associer $associer): static
    {
        if (!$this->associers->contains($associer)) {
            $this->associers->add($associer);
            $associer->setClub($this);
        }

        return $this;
    }

    public function removeAssocier(Associer $associer): static
    {
        if ($this->associers->removeElement($associer)) {
            // set the owning side to null (unless already changed)
            if ($associer->getClub() === $this) {
                $associer->setClub(null);
            }
        }

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Maillot>
     */
    public function getMaillots(): Collection
    {
        return $this->maillots;
    }

    public function addMaillot(Maillot $maillot): static
    {
        if (!$this->maillots->contains($maillot)) {
            $this->maillots->add($maillot);
            $maillot->setClub($this);
        }

        return $this;
    }

    public function removeMaillot(Maillot $maillot): static
    {
        if ($this->maillots->removeElement($maillot)) {
            // set the owning side to null (unless already changed)
            if ($maillot->getClub() === $this) {
                $maillot->setClub(null);
            }
        }

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
