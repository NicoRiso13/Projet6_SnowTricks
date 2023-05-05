<?php

namespace App\Entity;

use App\Repository\TricksRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass=TricksRepository::class)
 */
class Trick
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private User $user;

    /**
     * @ORM\Column(name="name", type="string", length=100)
     */
    private string $name;

    /**
     * @ORM\Column(type="text")
     */
    private string $description;


    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private DateTimeImmutable $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private ?DateTimeImmutable $modifiedAt;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $categorie;

    /**
     * @ORM\Column(name="poster", type="string", length=255, nullable=true)
     */
    private ?string $poster ;


    /**
     * @var Collection<int,Commentary>
     * @ORM\OneToMany(targetEntity="Commentary", mappedBy="trick")
     */
    private Collection $commentarys ;


    /**
     * @var Collection<int,Media>
     * @ORM\OneToMany(targetEntity="Media", mappedBy="tricks")
     */
    private Collection $medias ;



    public function __construct(?int $id, User $userId, string $name, string $description, string $categorie)
    {
        $this->id = $id;
        $this->user = $userId;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTimeImmutable();
        $this->categorie = $categorie;
        $this->medias = new ArrayCollection();
        $this->commentarys = new ArrayCollection();

    }

    /**
     * @return iterable<Commentary>
     */
    public function getCommentarys(): iterable
    {
        return $this->commentarys;
    }


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return void
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


    /**
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }



    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }


    /**
     * @return DateTimeImmutable|null
     */
    public function getModifiedAt(): ?DateTimeImmutable
    {
        return $this->modifiedAt;
    }


    /**
     * @param DateTimeImmutable|null $modifiedAt
     * @return void
     */
    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }


    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * @param string $categorie
     * @return void
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }


    /**
     * @return string|null
     */
    public function getPoster(): ?string
    {
        return $this->poster;
    }


    /**
     * @param string|null $poster
     * @return void
     */
    public function setPoster(?string $poster): void
    {
        $this->poster = $poster;
    }


    /**
     * @return iterable<Media>
     */
    public function getMedias(): iterable
    {
        return $this->medias;
    }

    /**
     * @param Media $media
     * @return $this
     */
    public function addMedia(Media $media): self
    {
        if (!$this->medias->contains($media)) {
            $this->medias[] = $media;
            $media->setTricks($this);
        }

        return $this;
    }

    /**
     * @param Media $media
     * @return $this
     */
    public function removeMedia(Media $media): self
    {
        $this->medias->removeElement($media);

        return $this;
    }




}
