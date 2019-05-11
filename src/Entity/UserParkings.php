<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserParkings
 *
 * @ORM\Table(name="user_parkings")
 * @ORM\Entity
 */
class UserParkings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="identifier", type="string", length=60, nullable=true)
     */
    private $identifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="garage", type="string", length=60, nullable=true)
     */
    private $garage;

    /**
     * @var int
     *
     * @ORM\Column(name="zone", type="integer", nullable=false)
     */
    private $zone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vehicle", type="text", length=0, nullable=true)
     */
    private $vehicle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getGarage(): ?string
    {
        return $this->garage;
    }

    public function setGarage(?string $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    public function getZone(): ?int
    {
        return $this->zone;
    }

    public function setZone(int $zone): self
    {
        $this->zone = $zone;

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


}
