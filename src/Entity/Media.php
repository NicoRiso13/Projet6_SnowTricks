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
     * @ORM\ManyToOne(targetEntity="Trick", inversedBy="medias")
     * @ORM\JoinColumn(nullable=false)
     */
    private Trick $tricks;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $pictures;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $videos;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Trick
     */
    public function getTricks(): Trick
    {
        return $this->tricks;
    }

    /**
     * @param Trick $tricks
     */
    public function setTricks(Trick $tricks): void
    {
        $this->tricks = $tricks;
    }



    public function getPictures(): ?string
    {
        return $this->pictures;
    }

    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    public function getVideos(): ?string
    {
        return $this->videos;
    }

    public function setVideos(string $videos): self
    {
        $this->videos = $videos;

        return $this;
    }
}
