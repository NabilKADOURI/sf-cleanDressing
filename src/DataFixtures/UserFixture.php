<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user
            ->setName('Kadouri')
            ->setFirstName('Nabil')
            ->setPhone('0785662233')
            ->setEmail('user@cleandressing.com')
            ->setPassword('test')
            ->setAdress('89 Rue du Puits Vieux');
        
        $manager->persist($user);

        $adminUser = new User();
        
        $adminUser->setName('Roger')
            ->setFirstName('Pierre')
            ->setPhone('0722232425')
            ->setEmail('admin@cleandressing.com')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword('admin')
            ->setAdress('89 Rue du Puits Vieux');
             
        $manager->persist($adminUser);
        
        $employee = new Employee();
        $employee->setName('Dupuis')
            ->setFirstName('Pierre')
            ->setPhone('0706050403')
            ->setEmail('employee@cleandressing.com')
            ->setRoles(['ROLE_EMPLOYEE'])
            ->setPassword('employee')
            ->setAdress('89 Rue du Puits Vieux');
        $manager->persist($employee);

        $manager->flush();
    }
}
