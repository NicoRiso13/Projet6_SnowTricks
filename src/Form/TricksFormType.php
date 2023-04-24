<?php

namespace App\Form;

use App\DTO\TricksDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class TricksFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')

            ->add('description', TextType::class)

            ->add('imageFile', FileType::class,[
                'label' => 'Télécharger un poster',
                'mapped' => false,

            ])

            ->add('categorie', ChoiceType::class, [
                'choices'  => [
                    ''=>'',
                    'grabs' => 'grabs',
                    'flip' => 'flip',
                    'butter' => 'butter',
                    'spin' => 'spin',

                ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TricksDto::class,
        ]);
    }
}
