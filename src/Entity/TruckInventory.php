<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TruckInventory
 *
 * @ORM\Table(name="truck_inventory", uniqueConstraints={@ORM\UniqueConstraint(name="item", columns={"item"}), @ORM\UniqueConstraint(name="plate", columns={"plate"})})
 * @ORM\Entity
 */
class TruckInventory
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
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=100, nullable=false)
     */
    private $item;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var string
     *
     * @ORM\Column(name="plate", type="string", length=8, nullable=false)
     */
    private $plate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="itemt", type="string", length=50, nullable=false)
     */
    private $itemt;

    /**
     * @var string
     *
     * @ORM\Column(name="owned", type="string", length=255, nullable=false)
     */
    private $owned;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(string $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getPlate(): ?string
    {
        return $this->plate;
    }

    public function setPlate(string $plate): self
    {
        $this->plate = $plate;

        return $this;
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

    public function getItemt(): ?string
    {
        return $this->itemt;
    }

    public function setItemt(string $itemt): self
    {
        $this->itemt = $itemt;

        return $this;
    }

    public function getOwned(): ?string
    {
        return $this->owned;
    }

    public function setOwned(string $owned): self
    {
        $this->owned = $owned;

        return $this;
    }


}
