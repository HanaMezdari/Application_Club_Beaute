<?php

namespace App\Controller\Liliabenaziza;

use App\Entity\Calendar;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CalendarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Calendar::class;
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
