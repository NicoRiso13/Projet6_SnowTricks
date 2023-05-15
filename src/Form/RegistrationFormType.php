<?php

namespace App\Form;

use App\DTO\UserDto;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, array(
                'label' => 'Nom',
                'attr' => array(
                    'placeholder' => 'Saisissez un Nom'
                )
            ))
            ->add('name', TextType::class, array(
                'label' => 'Prénom',
                'attr' => array(
                    'placeholder' => 'Saisissez un Prénom'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email ',
                'attr' => array(
                    'placeholder' => 'Saisissez un Email',
                )
            ))

            ->add('password', PasswordType::class, [
                'attr' => array(
                    'label' => 'Mot de passe',
                    'placeholder' => 'Saisissez un Mot de passe',
                ),
                'constraints' => [
                    new NotBlank([
                        'message' => 'Saisissez un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit être au moins de {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserDto::class,
        ]);
    }
}
