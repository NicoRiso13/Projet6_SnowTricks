<?php

        namespace App\DTO;

        use App\Validator\UniqueNameTricks;
        use Symfony\Component\Validator\Constraints as Assert;

        class MediaVideoDto
        {
            /**
             * @UniqueNameTricks()
             * @Assert\NotBlank()
             * @Assert\Length(max=255)
             * @Assert\Type("string")
             * @Assert\Regex("/^https:\/\/youtu\.be\/(.+)/", message="L'adresse n'est pas valide")
             */
            public string $link;
        }
