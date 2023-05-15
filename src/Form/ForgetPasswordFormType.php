<?php

namespace App\Form;

use App\DTO\ForgetPasswordDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ForgetPasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,
                [
                    'attr' => [
                        'placeholder' => 'Saisissez votre Email'
                    ]

                ]
            );

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ForgetPasswordDto::class,
        ]);
    }
}
