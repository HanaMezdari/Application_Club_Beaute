<?php

namespace App\Form;

use App\Entity\Reservationfleur;
use App\Entity\Servicefleurdelys;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ReservationfleurType extends AbstractType
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
       
        
        ->add('servicelilia', EntityType::class,['class'=>Servicefleurdelys::class,
        'choice_label'=>'nom',
       'label'=>'service Fleur De Lys'
   ])
    
;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservationfleur::class,
        ]);
    }
}
