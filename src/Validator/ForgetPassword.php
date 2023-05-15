<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ForgetPassword extends Constraint
{
    public string $message = 'L\'email {{string}} n\'existe pas. Veuillez saisir un email valide' ;

}
