<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Traits\FullCrudTrait;
use App\Entity\Employee;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class EmployeeCrudController extends AbstractCrudController
{
   
    public static function getEntityFqcn(): string
    {
        return Employee::class;
    }

   
}
