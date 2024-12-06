<?php

namespace App\Controller\Admin;


use App\Controller\Admin\Traits\ViewTrait;
use App\Entity\Article;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ArticleCrudController extends AbstractCrudController
{
    use ViewTrait;
    public static function getEntityFqcn(): string
    {
        return Article::class;
       
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title', 'Titre'),
            DateField::new('dateCreate', 'Date de création'),
            ImageField::new('picture', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads/')
                ->setRequired(false),
            TextField::new('subtitle', 'Sous-titre'),
            TextEditorField::new('description', 'Description'),
            BooleanField::new('visible'),
        ];
    }
}
