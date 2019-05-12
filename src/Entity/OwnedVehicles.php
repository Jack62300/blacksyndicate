<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnedVehicles
 *
 * @ORM\Table(name="owned_vehicles", indexes={@ORM\Index(name="vehsowned", columns={"owner"})})
 * @ORM\Entity
 */
class OwnedVehicles
{
    /**
     * @var string
     *
     * @ORM\Column(name="plate", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plate;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=22, nullable=false)
     */
    private $owner;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false, options={"comment"="Etat de la voiture"})
     */
    private $state = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vehicle", type="text", length=0, nullable=true)
     */
    private $vehicle;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false, options={"default"="car"})
     */
    private $type = 'car';

    /**
     * @var string|null
     *
     * @ORM\Column(name="job", type="string", length=20, nullable=true)
     */
    private $job;

    /**
     * @var bool
     *
     * @ORM\Column(name="stored", type="boolean", nullable=false)
     */
    private $stored = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="fourrieremecano", type="boolean", nullable=false)
     */
    private $fourrieremecano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vehiclename", type="string", length=50, nullable=false, options={"default"="voiture"})
     */
    private $vehiclename = 'voiture';

    public function getPlate(): ?string
    {
        return $this->plate;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getVehicle(): ?string
    {
        return $this->vehicle;
    }

    public function setVehicle(?string $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getStored(): ?bool
    {
        return $this->stored;
    }

    public function setStored(bool $stored): self
    {
        $this->stored = $stored;

        return $this;
    }

    public function getFourrieremecano(): ?bool
    {
        return $this->fourrieremecano;
    }

    public function setFourrieremecano(bool $fourrieremecano): self
    {
        $this->fourrieremecano = $fourrieremecano;

        return $this;
    }

    public function getVehiclename(): ?string
    {
        return $this->vehiclename;
    }

    public function setVehiclename(string $vehiclename): self
    {
        $this->vehiclename = $vehiclename;

        return $this;
    }


}
