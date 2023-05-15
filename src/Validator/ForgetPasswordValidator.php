<?php

namespace App\Validator;



use App\Repository\UserRepository;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class ForgetPasswordValidator extends ConstraintValidator
{

    private UserRepository $userRepository;

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof ForgetPassword ) {
            throw new UnexpectedTypeException($constraint, ForgetPassword::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)) {

            throw new UnexpectedValueException($value, 'string');

        }

        if ($this->userRepository->count(['email' => $value]) > 0) {

            $this->context->buildViolation($constraint->message)
                ->setParameter('{{string}}', $value)
                ->addViolation();
        }
    }
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

}
