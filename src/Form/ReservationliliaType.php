<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Servicelilia;
use App\Entity\Reservationlilia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ReservationliliaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('user', EntityType::class,['class'=>User::class,
        'choice_label'=>'nom',
       'label'=>'Votre Nom'
       ])
        ->add('nbr_personne', NumberType::class,[

            'label'=> 'Numbres des Personnes'
        ])
        ->add('start_date', DateTimeType::class, [
            'date_widget' => 'single_text'
        ])
        ->add('end_date', DateTimeType::class, [
            'date_widget' => 'single_text'
        ])
        ->add('description')
       
        
        ->add('servicelilia', EntityType::class,['class'=>Servicelilia::class,
        'choice_label'=>'nom',
       'label'=>'service Lilia Ben Aziza'
   ])
    
;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservationlilia::class,
        ]);
    }
}
