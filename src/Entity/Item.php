<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
#[ApiResource]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
   #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
   #[Groups([ 'user:read'])]
    private ?\DateTimeImmutable $createAt = null;

    #[ORM\ManyToOne(inversedBy: 'items')]

    private ?Order $orders = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
   #[Groups(['user:read'])]
    private ?Product $productItem = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
   #[Groups(['user:read'])]
    private ?Service $serviceItem = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
   #[Groups(['user:read'])]
    private ?Matter $matterItem = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['user:read'])]
    private ?float $price = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['user:read'])]
    private ?int $quantity = null;

    public function __construct()
    {
        $this->createAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(?\DateTimeImmutable $createAt): static
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getOrders(): ?Order
    {
        return $this->orders;
    }

    public function setOrders(?Order $orders): static
    {
        $this->orders = $orders;

        return $this;
    }

    public function getProductItem(): ?Product
    {
        return $this->productItem;
    }

    public function setProductItem(?Product $productItem): static
    {
        $this->productItem = $productItem;

        return $this;
    }

    public function getServiceItem(): ?Service
    {
        return $this->serviceItem;
    }

    public function setServiceItem(?Service $serviceItem): static
    {
        $this->serviceItem = $serviceItem;

        return $this;
    }

    public function getMatterItem(): ?Matter
    {
        return $this->matterItem;
    }

    public function setMatterItem(?Matter $matterItem): static
    {
        $this->matterItem = $matterItem;

        return $this;
    }

    public function __toString(): string
    {
        return $this->productItem ->getName() . ' ' . $this->serviceItem->getName() . '' 
        ; 
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

  
}
