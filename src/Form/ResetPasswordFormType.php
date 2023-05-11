<?php

namespace App\Form;

use App\DTO\ResetPasswordDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,
                [
                    'data_class' => null,
                    'attr' => [
                        'placeholder' => 'Saisissez votre Email'
                    ]

                ]
            )
            ->add('password', PasswordType::class,
                [
                    'data_class' => null,
                    'attr' => [
                        'placeholder' => 'Saisissez votre Mot de passe'
                    ]

                ]
            );

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ResetPasswordDto::class,
        ]);
    }
}
