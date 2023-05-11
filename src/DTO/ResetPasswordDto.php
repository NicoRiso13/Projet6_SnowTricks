<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ResetPasswordDto
{
    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-zA-Z.0-9@]+/")
     */
    public $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/^[a-zA-Z.0-9@]+/")
     */
    public $password;

}
