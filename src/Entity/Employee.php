<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EmployeeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
#[ApiResource]
class Employee extends User
{

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $employee_role = null;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'employee')]
    private Collection $order;

    public function __construct()
    {
        parent::__construct();
        $this->order = new ArrayCollection();
    }


    public function getEmployeeRole(): ?string
    {
        return $this->employee_role;
    }

    public function setEmployeeRole(?string $employee_role): static
    {
        $this->employee_role = $employee_role;

        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrder(): Collection
    {
        return $this->order;
    }

    public function addOrder(Order $order): static
    {
        if (!$this->order->contains($order)) {
            $this->order->add($order);
            $order->setEmployee($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): static
    {
        if ($this->order->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getEmployee() === $this) {
                $order->setEmployee(null);
            }
        }

        return $this;
    }
}
