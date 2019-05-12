<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehicleCategoriesSpawn
 *
 * @ORM\Table(name="vehicle_categories_spawn")
 * @ORM\Entity
 */
class VehicleCategoriesSpawn
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=60, nullable=false)
     */
    private $label;

    public function getName(): ?string
    {
        return $this->name;
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


}
