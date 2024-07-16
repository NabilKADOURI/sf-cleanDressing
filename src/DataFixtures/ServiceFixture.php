<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ServiceFixture extends Fixture
{

    public const SERVICES = [

        ['name' => 'LAVAGE - REPASSAGE',
        'description' => "Laver votre linge pour un résultat impeccable.",
        'picture' => '/Business-case-images/images/Lavage.png',
        'price' => 2,
        ],
        ['name' => 'NETTOYAGE DELICAT',
        'description' => "Le nettoyage délicat professionnel, un soin raffiné à votre service.",
        'picture' => '/Business-case-images/images/Nettoyage-sec.png',
        'price' => "4" ,
        ],
        ['name' => 'BLANCHISSERIE',
        'description' => "La blanchisserie professionnelle, c'est un luxe accessible.",
        'picture' => '/Business-case-images/images/blanchisserie.png',
        'price' => 3,
        ],
        ['name' => 'RETOUCHES',
        'description' => "Donnez une nouvelle vie à vos vêtements avec nos retouches personnalisées.",
        'picture' => '/Business-case-images/images/Retouche.png',
        'price' => 5,
        ],

       
    ];


    public function load(ObjectManager $manager): void
    {
   
    foreach (self::SERVICES as $serviceArray) {
      $service = new Service();

      $service
      ->setName($serviceArray['name'])
      ->setPicture($serviceArray['picture'])
      ->setDescription($serviceArray['description'])
      ->setPrice($serviceArray['price']);

      $manager->persist($service);

  }

        $manager->flush();
    }
}
