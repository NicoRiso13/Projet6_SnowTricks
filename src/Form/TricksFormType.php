<?php

namespace App\Form;

use App\DTO\TricksDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class TricksFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'data_class' => null,

            ])

            ->add('description', TextAreaType::class,[
                'attr' => array('rows' => '6'),
                'data_class' => null,
            ])

            ->add('imageFile', FileType::class,[
                'data_class' => null,
                'label' => 'Télécharger un poster',
                'mapped' => false,
                'required' =>false,


            ])

            ->add('categorie', ChoiceType::class, [
                'data_class' => null,
                'choices'  => [
                    ''=>'Choisir une catégorie',
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