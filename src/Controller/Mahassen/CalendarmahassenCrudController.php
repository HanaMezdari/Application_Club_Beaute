<?php

namespace App\Controller\Mahassen;

use App\Entity\Calendarmahassen;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CalendarmahassenCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Calendarmahassen::class;
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
