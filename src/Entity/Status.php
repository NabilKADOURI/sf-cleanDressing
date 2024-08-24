<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\StatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
#[ApiResource]
class Status
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'status')]
    private Collection $orderStatus;

    public function __construct()
    {
        $this->orderStatus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrderStatus(): Collection
    {
        return $this->orderStatus;
    }

    public function addOrderStatus(Order $orderStatus): static
    {
        if (!$this->orderStatus->contains($orderStatus)) {
            $this->orderStatus->add($orderStatus);
            $orderStatus->setStatus($this);
        }

        return $this;
    }

    public function removeOrderStatus(Order $orderStatus): static
    {
        if ($this->orderStatus->removeElement($orderStatus)) {
            // set the owning side to null (unless already changed)
            if ($orderStatus->getStatus() === $this) {
                $orderStatus->setStatus(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
