<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddonInventoryItems
 *
 * @ORM\Table(name="addon_inventory_items")
 * @ORM\Entity
 */
class AddonInventoryItems
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
     * @ORM\Column(name="inventory_name", type="string", length=255, nullable=false)
     */
    private $inventoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner", type="string", length=60, nullable=true)
     */
    private $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventoryName(): ?string
    {
        return $this->inventoryName;
    }

    public function setInventoryName(string $inventoryName): self
    {
        $this->inventoryName = $inventoryName;

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

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }


}
