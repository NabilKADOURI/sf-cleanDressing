<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ServiceFixture extends Fixture
{

    public const SERVICES = [

        ['name' => 'LAVAGE - REPASSAGE',
        'description' => "Notre service de lavage propose un nettoyage professionnel de vos vêtements . Grâce à des équipements de pointe et des produits de nettoyage spécialisés, notre service assure un nettoyage en profondeur tout en préservant la qualité des tissus.Nettoyer et repasser nous vous assurons assure d'une finission impeccable et sans plis pour vos vêtements.",
        'picture' => '/Business-case-images/img-webp/Photo-lavage-250x250_resultat.webp',
        'price' => 2,
        ],
        ['name' => 'NETTOYAGE DELICAT',
        'description' => "Notre service de nettoyage à sec pour les vêtements délicats est conçu pour nettoyer et entretenir des articles fabriqués à partir de tissus sensibles comme le cuir, le daim, la soie, et d'autres matériaux qui ne peuvent pas être lavés à l'eau. Ce service utilise des solvants spéciaux et des techniques spécifiques pour garantir que les articles délicats sont nettoyés en profondeur tout en préservant leur qualité et leur texture.",
        'picture' => '/Business-case-images/images/Photo-cuir.jpg',
        'price' => "4" ,
        ],
        ['name' => 'BLANCHISSERIE',
        'description' => "Notre service de blanchissage pour articles de literie assure un nettoyage complet et hygiénique des couettes, taies d'oreiller, draps, et autres articles similaires. Utilisant des techniques spécialisées et des équipements industriels, ce service garantit une propreté impeccable et une désinfection en profondeur, tout en préservant la qualité et la texture des tissus.",
        'picture' => '/Business-case-images/images/photos-blanchisserie.-250x250.jpg',
        'price' => 3,
        ],
        ['name' => 'RETOUCHES',
        'description' => "Notre service de retouche offre des ajustements et des modifications de vêtements pour garantir un ajustement parfait et améliorer l'apparence générale des vêtements. Que ce soit pour réparer une couture, ajuster la taille, raccourcir les manches ou moderniser un vêtement, le service de retouche répond aux besoins spécifiques de chaque client.",
        'picture' => '/Business-case-images/img-webp/Photo-retouche-250x250_resultat.webp',
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
