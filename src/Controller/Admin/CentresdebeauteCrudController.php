<?php

namespace App\Controller\Admin;

use App\Entity\Centresdebeaute;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
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
            UrlField::new('url'),
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
            ImageField::new('image2')
               ->setBasePath('centre/')
               ->setUploadDir('public/centre')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
    
}
