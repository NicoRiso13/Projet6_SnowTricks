<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class TricksDto
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=50)
     * @Assert\Type("string")
     * @Assert\Regex("/[a-zA-Z0-9'á-ÿÁ-Ÿ ]/")
     */
    public $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/[a-zA-Z0-9 .,'àâêéè]/")
     */
    public $description;

    /**
     * @Assert\File( maxSizeMessage = "L'image ne doit pas dépasser 5Mb.",
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpg", "image/jpeg","image/png"},
     *     mimeTypesMessage = "Les poster doivent être au format JPG ou PNG.")
     * @Assert\Regex("/^[a-zA-Z]+[0-9]+.+$/")
     */
    public $imageFile;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-z]+$/")
     */
    public $categorie;








}
