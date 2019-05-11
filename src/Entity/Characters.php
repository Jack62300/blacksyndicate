<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characters
 *
 * @ORM\Table(name="characters")
 * @ORM\Entity
 */
class Characters
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
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="dateofbirth", type="string", length=255, nullable=false)
     */
    private $dateofbirth;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=1, nullable=false, options={"default"="M"})
     */
    private $sex = 'M';

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=128, nullable=false)
     */
    private $height;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastdigits", type="string", length=255, nullable=true)
     */
    private $lastdigits;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ems_rank", type="integer", nullable=true, options={"default"="-1"})
     */
    private $emsRank = '-1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="leo_rank", type="integer", nullable=true, options={"default"="-1"})
     */
    private $leoRank = '-1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tow_rank", type="integer", nullable=true, options={"default"="-1"})
     */
    private $towRank = '-1';

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth;
    }

    public function setDateofbirth(string $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

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

    public function getEmsRank(): ?int
    {
        return $this->emsRank;
    }

    public function setEmsRank(?int $emsRank): self
    {
        $this->emsRank = $emsRank;

        return $this;
    }

    public function getLeoRank(): ?int
    {
        return $this->leoRank;
    }

    public function setLeoRank(?int $leoRank): self
    {
        $this->leoRank = $leoRank;

        return $this;
    }

    public function getTowRank(): ?int
    {
        return $this->towRank;
    }

    public function setTowRank(?int $towRank): self
    {
        $this->towRank = $towRank;

        return $this;
    }


}
