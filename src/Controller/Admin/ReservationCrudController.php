<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservation::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('nom_user'),
            TextareaField::new('description'),
            DateTimeField::new('start_date'),
            DateTimeField::new('end_date'),
            NumberField::new('nbr_personne'),
            AssociationField::new('servicelilia'),
            AssociationField::new('serviceviolette'),
            AssociationField::new('servicemahassen'),
            AssociationField::new('servicefleurdelys'),
            AssociationField::new('centresdebeaute'),
        ];
    }
    
}
