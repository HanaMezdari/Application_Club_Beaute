<?php

namespace App\Controller\Liliabenaziza;

use App\Entity\Servicelilia;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
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
            MoneyField::new('prix')->setCurrency('EUR'),
           
        ];
    }
   
}
