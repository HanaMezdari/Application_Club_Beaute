<?php

namespace App\Controller\Fleurdelys;

use App\Entity\Servicefleurdelys;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServicefleurdelysCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Servicefleurdelys::class;
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
