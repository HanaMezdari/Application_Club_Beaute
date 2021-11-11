<?php

namespace App\Controller\Centresdebeaute;

use App\Entity\Centresdebeaute;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CentresdebeauteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Centresdebeaute::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('nom'),
            TextareaField::new('description'),
            TextField::new('adresse'),
            NumberField::new('lat'),
            NumberField::new('lon'),
            TextField::new('mot_de_passe'),
            EmailField::new('email'),
            NumberField::new('num_tel'),
            ImageField::new('image')
               ->setBasePath('centre/')
               ->setUploadDir('public/centre')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
   
}
