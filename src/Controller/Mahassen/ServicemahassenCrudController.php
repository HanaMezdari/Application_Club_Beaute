<?php

namespace App\Controller\Mahassen;

use App\Entity\Servicemahassen;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServicemahassenCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Servicemahassen::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            AssociationField::new('services'),
            TextField::new('nom'),
            MoneyField::new('prix')->setCurrency('EUR'),
            BooleanField::new('promo'),
        ];
    }
   
}
