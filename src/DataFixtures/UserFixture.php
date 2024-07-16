<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    //   User
        $user = new User();
        $user->setName('Kadouri')
             ->setFirstName('Nabil')
             ->setPhone(0785662233)
             ->setEmail('kadouri@gmail.com')
             ->setPassword(password_hash('test', PASSWORD_DEFAULT))
             ->setAdress('89 Rue du Puits Vieux');
        $manager->persist($user);

            // User admin
        $user = new User();
        $user->setName('Roger')
             ->setFirstName('Pierre')
             ->setPhone(0722232425)
             ->setEmail('roger@gmail.com')
             ->setPassword(password_hash('admin', PASSWORD_DEFAULT))
             ->setAdress('89 Rue du Puits Vieux')
             ->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        // User superAdmin
        $user = new User();
        $user->setName('Dupuis')
             ->setFirstName('Pierre')
             ->setPhone(0706050403)
             ->setEmail('Pierre@gmail.com')
             ->setPassword(password_hash('superadmin', PASSWORD_DEFAULT))
             ->setAdress('89 Rue du Puits Vieux')
             ->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($user);

        $manager->flush();
    }
}
