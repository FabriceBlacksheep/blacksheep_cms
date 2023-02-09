<?php

namespace App\Entity;

use App\Repository\CampervanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
// Api Platform
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: CampervanRepository::class)]
// Api Platform
#[ApiResource]
class Campervan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 10000)]
    private ?string $description = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $options = [];

    #[ORM\Column(length: 255)]
    private ?string $visiteVirtuelle = null;

    #[ORM\Column(length: 255)]
    private ?string $visuel = null;

    #[ORM\Column(length: 255)]
    private ?string $lienDescriptif = null;

    #[ORM\Column(length: 255)]
    private ?string $idLocpro = null;

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

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

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

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getVisiteVirtuelle(): ?string
    {
        return $this->visiteVirtuelle;
    }

    public function setVisiteVirtuelle(string $visiteVirtuelle): self
    {
        $this->visiteVirtuelle = $visiteVirtuelle;

        return $this;
    }

    public function getVisuel(): ?string
    {
        return $this->visuel;
    }

    public function setVisuel(string $visuel): self
    {
        $this->visuel = $visuel;

        return $this;
    }

    public function getLienDescriptif(): ?string
    {
        return $this->lienDescriptif;
    }

    public function setLienDescriptif(string $lienDescriptif): self
    {
        $this->lienDescriptif = $lienDescriptif;

        return $this;
    }

    public function getIdLocpro(): ?string
    {
        return $this->idLocpro;
    }

    public function setIdLocpro(string $idLocpro): self
    {
        $this->idLocpro = $idLocpro;

        return $this;
    }
}
