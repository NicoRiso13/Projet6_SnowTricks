<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class UserModifyDto
{

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-zA-Z]+/")
     */
    public $firstname;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-zA-Z-]+/")
     */
    public $name;


    /**
     * @Assert\File( maxSizeMessage = "L'image ne doit pas dépasser 5Mb.",
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpg", "image/jpeg","image/png"},
     *     mimeTypesMessage = "Les poster doivent être au format JPG ou PNG.")
     */
    public $picture;


}
