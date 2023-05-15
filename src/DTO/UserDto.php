<?php

namespace App\DTO;

use App\Validator\UniqueEmail;
use Symfony\Component\Validator\Constraints as Assert;

class UserDto
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
     * @UniqueEmail()
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-zA-Z.0-9@]+/")
     */
    public $email;

    /**
     * @Assert\File( maxSizeMessage = "L'image ne doit pas dépasser 5Mb.",
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpg", "image/jpeg","image/png"},
     *     mimeTypesMessage = "Les poster doivent être au format JPG ou PNG.")
     */
    public $picture;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-zA-Z.0-9@]+/")
     */
    public $password;



}
