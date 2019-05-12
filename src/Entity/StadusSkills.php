<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StadusSkills
 *
 * @ORM\Table(name="stadus_skills")
 * @ORM\Entity
 */
class StadusSkills
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
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="stamina", type="string", length=255, nullable=false)
     */
    private $stamina;

    /**
     * @var string
     *
     * @ORM\Column(name="strength", type="string", length=255, nullable=false)
     */
    private $strength;

    /**
     * @var string|null
     *
     * @ORM\Column(name="driving", type="string", length=255, nullable=true)
     */
    private $driving;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shooting", type="string", length=255, nullable=true)
     */
    private $shooting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fishing", type="string", length=255, nullable=true)
     */
    private $fishing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="drugs", type="string", length=255, nullable=true)
     */
    private $drugs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getStamina(): ?string
    {
        return $this->stamina;
    }

    public function setStamina(string $stamina): self
    {
        $this->stamina = $stamina;

        return $this;
    }

    public function getStrength(): ?string
    {
        return $this->strength;
    }

    public function setStrength(string $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getDriving(): ?string
    {
        return $this->driving;
    }

    public function setDriving(?string $driving): self
    {
        $this->driving = $driving;

        return $this;
    }

    public function getShooting(): ?string
    {
        return $this->shooting;
    }

    public function setShooting(?string $shooting): self
    {
        $this->shooting = $shooting;

        return $this;
    }

    public function getFishing(): ?string
    {
        return $this->fishing;
    }

    public function setFishing(?string $fishing): self
    {
        $this->fishing = $fishing;

        return $this;
    }

    public function getDrugs(): ?string
    {
        return $this->drugs;
    }

    public function setDrugs(?string $drugs): self
    {
        $this->drugs = $drugs;

        return $this;
    }


}
