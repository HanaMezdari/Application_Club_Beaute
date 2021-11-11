<?php

namespace App\Controller\Centresdebeaute;

use App\Entity\Sousservice;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SousserviceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sousservice::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('centresdebeaute'),
            AssociationField::new('services'),
            TextField::new('nom'),
            MoneyField::new('prix')->setCurrency('EUR'),
            ImageField::new('image')
               ->setBasePath('sousservice/')
               ->setUploadDir('public/sousservice')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
   
}
