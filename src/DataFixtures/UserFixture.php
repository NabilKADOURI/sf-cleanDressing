<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use App\Entity\Testimonial;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class UserFixture extends Fixture
{

    public const TESTIMONIALS = [

        [ "title" => "Incroyable et professionnel",
        "description" => "“ Un service impeccable de la prise de commande à la livraison. Vraiment pratique et de grande qualité ! Je recommande !“",
        "star" => 4],
 
        [ "title" => "Un service rapide et impeccable !",
        "description" => "“ Je suis vraiment satisfait du service de ce pressing. Mes vêtements sont toujours parfaitement nettoyés et repassés, prêts à être portés. Le personnel est accueillant et très professionnel, et les délais sont respectés à chaque fois. Je recommande fortement pour ceux qui recherchent un pressing fiable et de qualité ! “",
        "star" => 5],
 
        [ "title" => "Correct mais peut mieux faire",
        "description" => "“ Le service est globalement satisfaisant, mais il y a eu quelques petits ratés. Certains de mes vêtements n'étaient pas parfaitement repassés, et j'ai dû attendre un peu plus longtemps que prévu pour récupérer ma commande. C’est un bon pressing pour un dépannage, mais il y a encore de la place pour s'améliorer.“",
        "star" => 3],
     ];

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user
            ->setName('Kadouri')
            ->setFirstName('Nabil')
            ->setPicture('photo-profile.jpg')
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

        foreach (self::TESTIMONIALS as $testimonialArray) {

            $testimonial = new Testimonial();

            $testimonial
            ->setUser($user)
            ->setTitle(title: $testimonialArray['title'])
            ->setDescription(description: $testimonialArray['description'])
            ->setStar(star: $testimonialArray['star'])
            ->setVisible(true);
            
            $manager->persist($testimonial);

        }

        $manager->flush();
    }
}
