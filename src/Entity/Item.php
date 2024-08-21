<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ItemRepository::class)]
#[ApiResource ]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]

    private ?\DateTimeImmutable $createAt = null;

    #[ORM\ManyToOne(inversedBy: 'items')]

    private ?Order $orders = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]

    private ?Product $productItem = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]

    private ?Service $serviceItem = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]

    private ?Matter $matterItem = null;

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
}
