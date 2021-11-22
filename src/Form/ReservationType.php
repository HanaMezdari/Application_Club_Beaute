<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Servicelilia;
use App\Entity\Liliabenaziza;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbr_personne', NumberType::class,[

                'label'=> 'Numbres des Personnes'
            ])
            ->add('nom_user')
            ->add('start_date', DateTimeType::class, [
                'date_widget' => 'single_text'
            ])
            ->add('end_date', DateTimeType::class, [
                'date_widget' => 'single_text'
            ])
            ->add('description')
            ->add('liliabenaziza', EntityType::class,['class'=>Liliabenaziza::class,
            'choice_label'=>'nom',
           'label'=>'Centre De Beauté'
       ])
            ->add('servicelilia', EntityType::class,['class'=>Servicelilia::class,
            'choice_label'=>'nom',
           'label'=>'service Lilia Ben Aziza'
       ])
           ->add('submit', SubmitType::class,[
           'label'=> "payer",
            'attr' => [

            'class'=>'btn w-100 text-white btn-lg bg-dark',
        ]
    ])
    ;
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
