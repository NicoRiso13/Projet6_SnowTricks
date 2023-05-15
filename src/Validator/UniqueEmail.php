<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UniqueEmail extends Constraint
{
    public string $message = 'L\'email {{string}} est déja utilisé' ;

}
