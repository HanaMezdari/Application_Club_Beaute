<?php

namespace App\Controller\Liliabenaziza;

use App\Entity\Servicelilia;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServiceliliaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Servicelilia::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            AssociationField::new('services'),
            TextField::new('nom'),
            NumberField::new('prix'),
            BooleanField::new('promo'),
            ImageField::new('image')
            ->setBasePath('servicelilia/')
            ->setUploadDir('public/servicelilia')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
   
}
