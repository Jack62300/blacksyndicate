<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnedBags
 *
 * @ORM\Table(name="owned_bags")
 * @ORM\Entity
 */
class OwnedBags
{
    /**
     * @var int
     *
     * @ORM\Column(name="id2", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="identifier", type="string", length=50, nullable=true)
     */
    private $identifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=true)
     */
    private $x;

    /**
     * @var float|null
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=true)
     */
    private $y;

    /**
     * @var float|null
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=true)
     */
    private $z;

    /**
     * @var int
     *
     * @ORM\Column(name="itemcount", type="integer", nullable=false)
     */
    private $itemcount = '0';

    public function getId2(): ?int
    {
        return $this->id2;
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(?float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(?float $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?float
    {
        return $this->z;
    }

    public function setZ(?float $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getItemcount(): ?int
    {
        return $this->itemcount;
    }

    public function setItemcount(int $itemcount): self
    {
        $this->itemcount = $itemcount;

        return $this;
    }


}
