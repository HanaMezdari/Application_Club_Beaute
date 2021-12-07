<?php

namespace App\Controller\Violette;

use App\Entity\Reservationviolette;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReservationvioletteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservationviolette::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
