<?php

namespace App\Controller\Liliabenaziza;

use App\Entity\Reservationlilia;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReservationliliaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservationlilia::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('user'),
            TextareaField::new('description'),
            IntegerField::new('nbr_persoone'),
            DateTimeField::new('start_date'),
            DateTimeField::new('end_date'),
            AssociationField::new('servicelilia'),
        ];
    }
    
}
