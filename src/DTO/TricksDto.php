<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class TricksDto
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=50)
     * @Assert\Type("string")
     */
    public $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    public $description;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    public $poster;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    public $categorie;








}
