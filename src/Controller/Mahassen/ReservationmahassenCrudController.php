<?php

namespace App\Controller\Mahassen;

use App\Entity\Reservationmahassen;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReservationmahassenCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservationmahassen::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('user'),
            TextareaField::new('description'),
            IntegerField::new('nbr_personne'),
            DateTimeField::new('start_date'),
            DateTimeField::new('end_date'),
            AssociationField::new('servicemahassen'),
        ];
    }
   
}
