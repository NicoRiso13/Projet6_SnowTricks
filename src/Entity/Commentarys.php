<?php

namespace App\Entity;

use App\Repository\CommentarysRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentarysRepository::class)
 */
class Commentarys
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=users::class, inversedBy="commentarys")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?users $userId;

    /**
     * @ORM\ManyToOne(targetEntity=tricks::class, inversedBy="commentarys")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?tricks $tricksId;

    /**
     * @ORM\Column(type="text")
     */
    private ?string $content;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private ?\DateTimeImmutable $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?users
    {
        return $this->userId;
    }

    public function setUserId(?users $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getTricksId(): ?tricks
    {
        return $this->tricksId;
    }

    public function setTricksId(?tricks $tricksId): self
    {
        $this->tricksId = $tricksId;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
