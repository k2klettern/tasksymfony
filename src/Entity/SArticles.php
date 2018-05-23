<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SArticles
 *
 * @ORM\Table(name="s_articles")
 * @ORM\Entity
 */
class SArticles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shippingtime", type="string", length=11, nullable=true)
     */
    private $shippingtime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datum", type="date", nullable=true)
     */
    private $datum;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="topseller", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $topseller;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="changetime", type="datetime", nullable=false)
     */
    private $changetime;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    public $cats;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShippingtime(): ?string
    {
        return $this->shippingtime;
    }

    public function setShippingtime(?string $shippingtime): self
    {
        $this->shippingtime = $shippingtime;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(?\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getTopseller(): ?int
    {
        return $this->topseller;
    }

    public function setTopseller(int $topseller): self
    {
        $this->topseller = $topseller;

        return $this;
    }

    public function getChangetime(): ?\DateTimeInterface
    {
        return $this->changetime;
    }

    public function setChangetime(\DateTimeInterface $changetime): self
    {
        $this->changetime = $changetime;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }


}
