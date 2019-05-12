<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsfourDna
 *
 * @ORM\Table(name="jsfour_dna")
 * @ORM\Entity
 */
class JsfourDna
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="killer", type="string", length=255, nullable=true)
     */
    private $killer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dead", type="string", length=255, nullable=true)
     */
    private $dead;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weapon", type="string", length=255, nullable=true)
     */
    private $weapon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="murder"})
     */
    private $type = 'murder';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastdigits", type="string", length=255, nullable=true)
     */
    private $lastdigits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uploader", type="string", length=255, nullable=true)
     */
    private $uploader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datum", type="string", length=255, nullable=true)
     */
    private $datum;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getKiller(): ?string
    {
        return $this->killer;
    }

    public function setKiller(?string $killer): self
    {
        $this->killer = $killer;

        return $this;
    }

    public function getDead(): ?string
    {
        return $this->dead;
    }

    public function setDead(?string $dead): self
    {
        $this->dead = $dead;

        return $this;
    }

    public function getWeapon(): ?string
    {
        return $this->weapon;
    }

    public function setWeapon(?string $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLastdigits(): ?string
    {
        return $this->lastdigits;
    }

    public function setLastdigits(?string $lastdigits): self
    {
        $this->lastdigits = $lastdigits;

        return $this;
    }

    public function getUploader(): ?string
    {
        return $this->uploader;
    }

    public function setUploader(?string $uploader): self
    {
        $this->uploader = $uploader;

        return $this;
    }

    public function getDatum(): ?string
    {
        return $this->datum;
    }

    public function setDatum(?string $datum): self
    {
        $this->datum = $datum;

        return $this;
    }


}
