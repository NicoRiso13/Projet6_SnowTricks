<?php

namespace App\Validator;



use App\Repository\UserRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class UniqueEmailValidator extends ConstraintValidator
{

    private UserRepository $userRepository;

    /**
     * @throws NonUniqueResultException
     * @throws NoResultException
     */
    public function validate($value, Constraint $constraint): void
    {
        if (!$constraint instanceof UniqueEmail) {
            throw new UnexpectedTypeException($constraint, UniqueEmail::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)) {

            throw new UnexpectedValueException($value, 'string');

        }

        if ($this->userRepository->countEmail($value) > 0) {

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
