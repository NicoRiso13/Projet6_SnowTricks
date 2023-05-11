<?php

namespace App\Form;

use App\DTO\UserDto;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserModifyFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Nom',
                'data_class' => null,

            ])
            ->add('name', TextType::class, [
                'label' => 'Prénom',
                'data_class' => null,
            ])

            ->add('email', EmailType::class, [
                'label' => 'Email',
                'data_class' => null,

            ])

            ->add('picture', FileType::class,[
                'data_class' => null,
                'mapped' => false,
                'required' =>false,


            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserDto::class,
        ]);
    }

}
