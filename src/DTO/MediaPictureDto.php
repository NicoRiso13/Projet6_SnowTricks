<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class MediaPictureDto
{

    /**
     * @Assert\File( maxSizeMessage = "L'image ne doit pas dépasser 5Mb.",
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpg", "image/jpeg","image/png"},
     *     mimeTypesMessage = "Les poster doivent être au format JPG ou PNG.")
     */
    public $imageFile;

}
