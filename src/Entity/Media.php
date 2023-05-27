<?php

namespace App\Entity;

use App\Repository\MediasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediasRepository::class)
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity="Trick",inversedBy="medias")
     * @ORM\JoinColumn(nullable=false)
     */
    private Trick $trick;

    /**
     * @ORM\Column(name="pictures", type="string", length=255, nullable=true)
     */
    private ?string $pictures;

    /**
     * @ORM\Column(name="videos", type="string", length=255, nullable=true)
     */
    private ?string $videos;




    public function __construct(Trick $trick, ?string $pictures, ?string $videos)
    {
        $this->trick = $trick;
        $this->pictures = $pictures;
        $this->videos = $videos;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Trick
     */
    public function getTrick(): Trick
    {
        return $this->trick;
    }

    /**
     * @param Trick $trick
     */
    public function setTrick(Trick $trick): void
    {
        $this->trick = $trick;
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
}
