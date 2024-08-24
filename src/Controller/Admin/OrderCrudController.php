<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            DateTimeField::new('date')->hideOnForm(),
            NumberField::new('totalPrice')->hideOnForm(),
            ArrayField::new('items')->hideOnForm(),
            AssociationField::new('userOrder')->hideOnForm(),
            AssociationField::new('status'),
           
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
          
            ->add(Crud::PAGE_INDEX, Action::DETAIL)  
            ->setPermission(Action::DELETE, 'ROLE_ADMIN');  
    }
}
