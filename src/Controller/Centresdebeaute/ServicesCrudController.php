<?php

namespace App\Controller\Centresdebeaute;

use App\Entity\Services;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServicesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Services::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('nom'),
            ImageField::new('image')
            ->setBasePath('services/')
            ->setUploadDir('public/services')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
  
}
