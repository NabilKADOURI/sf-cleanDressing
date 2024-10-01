<?php

namespace App\Controller\Admin;


use App\Controller\Admin\Traits\ViewTrait;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class CategoryCrudController extends AbstractCrudController
{   
    use ViewTrait;
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Catégorie')
            ->setEntityLabelInPlural('Catégories')
            ->setDefaultSort(['name' => 'ASC']);
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name', 'Nom'),
            ImageField::new('picture', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            AssociationField::new('product', 'Produits')
                ->setFormTypeOptions([
                    'by_reference' => false,
                ]),
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('product'));
    }
}
