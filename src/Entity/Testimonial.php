<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Repository\TestimonialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: TestimonialRepository::class)]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post()
    ],

    normalizationContext: ['groups' => ['testimonial:read']],
)]
class Testimonial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups([ 'user:read', 'testimonial:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
   #[Groups([ 'user:read', 'testimonial:read'])]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
   #[Groups([ 'user:read', 'testimonial:read'])]
    private ?string $title = null;

    #[ORM\Column]
   #[Groups([ 'user:read', 'testimonial:read'])]
    private ?int $star = null;

    #[ORM\ManyToOne(inversedBy: 'testimonials')]
    #[Groups([ 'testimonial:read'])]
    private ?User $user = null;

    #[ORM\Column]
    #[Groups([ 'testimonial:read'])]
    private ?bool $visible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getStar(): ?int
    {
        return $this->star;
    }

    public function setStar(int $star): static
    {
        $this->star = $star;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;

        return $this;
    }
}
