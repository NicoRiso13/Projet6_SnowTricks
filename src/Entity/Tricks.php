<?php

namespace App\Entity;

use App\Repository\TricksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TricksRepository::class)
 */
class Tricks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=users::class, inversedBy="tricks")
     */
    private ?users $userId;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $name;

    /**
     * @ORM\Column(type="text")
     */
    private ?string $descritpion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $pictures;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $videos;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private ?\DateTimeImmutable $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private ?\DateTimeImmutable $modifiedAt;

    /**
     * @ORM\OneToMany(targetEntity=Commentarys::class, mappedBy="tricksId")
     */
    private ArrayCollection $commentarys;

    public function __construct()
    {
        $this->commentarys = new ArrayCollection();
    }

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescritpion(): ?string
    {
        return $this->descritpion;
    }

    public function setDescritpion(string $descritpion): self
    {
        $this->descritpion = $descritpion;

        return $this;
    }

    public function getPictures(): ?string
    {
        return $this->pictures;
    }

    public function setPictures(?string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    public function getVideos(): ?string
    {
        return $this->videos;
    }

    public function setVideos(?string $videos): self
    {
        $this->videos = $videos;

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

    public function getModifiedAt(): ?\DateTimeImmutable
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt(?\DateTimeImmutable $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * @return Collection<int, Commentarys>
     */
    public function getCommentarys(): Collection
    {
        return $this->commentarys;
    }

    public function addCommentary(Commentarys $commentary): self
    {
        if (!$this->commentarys->contains($commentary)) {
            $this->commentarys[] = $commentary;
            $commentary->setTricksId($this);
        }

        return $this;
    }

    public function removeCommentary(Commentarys $commentary): self
    {
        if ($this->commentarys->removeElement($commentary)) {
            // set the owning side to null (unless already changed)
            if ($commentary->getTricksId() === $this) {
                $commentary->setTricksId(null);
            }
        }

        return $this;
    }
}
