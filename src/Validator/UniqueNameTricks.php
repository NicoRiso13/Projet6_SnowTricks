<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UniqueNameTricks extends Constraint
{
    public string $message = 'La figure "{{string}}" existe déja. ' ;
}
