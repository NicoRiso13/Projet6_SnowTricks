<?php

namespace App\Form;

use App\DTO\MediaVideoDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

            class addVideoFormType extends AbstractType
            {
                public function buildForm(FormBuilderInterface $builder, array $options): void
                {
                    $builder
                        ->add('link', TextType::class, [
                            'label' => 'Insérer votre lien Youtube',
                            'required' => true,
                        ]);
                }

                public function configureOptions(OptionsResolver $resolver): void
                {
                    $resolver->setDefaults([
                        'data_class' => MediaVideoDto::class,
                    ]);
                }
}
