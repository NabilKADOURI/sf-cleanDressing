<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Traits\ViewAndDeleteTrait;
use App\Entity\Item;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ItemCrudController extends AbstractCrudController
{
    use ViewAndDeleteTrait;
    public static function getEntityFqcn(): string
    {
        return Item::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            DateTimeField::new('createAt'),
            AssociationField::new('orders', 'N° order'),
            AssociationField::new('productItem', 'Products'),
            AssociationField::new('serviceItem', 'Services'),
            AssociationField::new('matterItem', 'Matters'),
            
        ];
    }
}

