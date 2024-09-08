<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Traits\ViewAndDeleteTrait;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    use ViewAndDeleteTrait;
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('firstName'),
            TextField::new('email'),
            TextField::new('password')->onlyWhenCreating(),
            TextField::new('phone'),
            TextField::new('adress'),
            ArrayField::new('roles'),
        ];
    }
}
