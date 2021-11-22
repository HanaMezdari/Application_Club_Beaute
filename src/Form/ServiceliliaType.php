<?php

namespace App\Form;

use App\Entity\Services;
use App\Entity\Servicelilia;
use App\Entity\Liliabenaziza;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceliliaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('promo')
            ->add('liliabenaziza', EntityType::class, [
                'class' => Liliabenaziza::class,
                'choice_label' => 'nom',
                'label'=>'liliabenaziza'
            ])
            ->add('servicelilia')
            ->add('services', EntityType::class, [
                'class' => Services::class,
                'choice_label' => 'nom',
                'label'=>'services'
            ])

            ->add('centresdebeaute', EntityType::class, [
                'class' => Centresdebeaute::class,
                'choice_label' => 'nom',
                'label'=>'centresdebeaute'
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Servicelilia::class,
        ]);
    }
}
