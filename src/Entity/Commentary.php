<?php

namespace App\Entity;

use App\Repository\CommentaryRepository;
use App\Repository\TricksRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaryRepository::class)
 */
class Commentary
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private User $user;


    /**
     * @ORM\ManyToOne(targetEntity="Trick", inversedBy="commentarys")
     * @ORM\JoinColumn(nullable=false)
     */
    private Trick $trick;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private DateTimeImmutable $createdAt;


    public function __construct( User $user, Trick $trick, string $content)
    {

        $this->user = $user;
        $this->trick = $trick;
        $this->content = $content;
        $this->createdAt =new DateTimeImmutable();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    public function getUser(): User
    {
        return $this->user;
    }


    public function getTrick(): Trick
    {
        return $this->trick;
    }


    public function getContent(): string
    {
        return $this->content;
    }


    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }




}
