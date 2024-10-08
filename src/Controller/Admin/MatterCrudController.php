<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Traits\FullCrudTrait;
use App\Controller\Admin\Traits\ViewTrait;
use App\Entity\Matter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class MatterCrudController extends AbstractCrudController
{
    use ViewTrait;
    public static function getEntityFqcn(): string
    {
        return Matter::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Matière')
            ->setEntityLabelInPlural('Matières')
            ->setDefaultSort(['name' => 'ASC']);
    }



    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name', 'Nom'),
            NumberField::new('price', 'Prix'),
           
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('products'));
    }
}
