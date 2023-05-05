<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class CommentaryDto
{
    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Regex("/[a-zA-Z0-9 .,'àâêéè]/")
     */
    public $comment;



}
