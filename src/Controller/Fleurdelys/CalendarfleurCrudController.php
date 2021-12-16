<?php

namespace App\Controller\Fleurdelys;

use App\Entity\Calendarfleur;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CalendarfleurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Calendarfleur::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            TextareaField::new('description'),
            DateTimeField::new('start'),
            DateTimeField::new('end'),
            ColorField::new('background_color'),
            ColorField::new('border_color'),
            ColorField::new('text_color'),
        ];
    }
   
}
