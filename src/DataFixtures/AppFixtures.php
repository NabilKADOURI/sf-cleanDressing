<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture

{
    public const CATEGORIES = [

        ['name' => 'Hauts',
        ],

        ['name' => 'Bas',
        ],

        ['name' => 'Cérémonie',
        ],

        ['name' => 'Sports',
        ],

        ['name' => 'Linge de lit',
        ],
    ];

    public const PRODUCTS = [

        ['name' => 'Chemise',
        'description' => "Optimisez l'élégance de vos chemises avec notre service de nettoyage spécialisé. Chaque chemise est inspectée, nettoyée délicatement, et les taches sont traitées. Profitez d'une apparence soignée et d'un confort durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 2,
        ],      
        ['name' => 'T-shirt',
        'description' => "Rafraîchissez vos t-shirts préférés avec notre service de nettoyage spécialisé. Chaque t-shirt est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une apparence fraîche et d'un confort durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 1.50,
        ],      
        ['name' => 'Pull',
        'description' => "Ravivez la douceur de vos pulls préférés avec notre service de nettoyage spécialisé. Chaque pull est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une chaleur douillette et d'une fraîcheur durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 5,
        ],      
        ['name' => 'Pontalon',
        'description' => "Retrouvez la fraîcheur de vos pantalons préférés avec notre service de nettoyage spécialisé. Chaque pantalon est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une apparence soignée et d'un confort durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 5,
        ],      
        ['name' => 'Jean',
        'description' => "Revitalisez l'aspect de vos jeans adorés avec notre service de nettoyage spécialisé. Chaque jean est inspecté, nettoyé avec soin, et les taches sont traitées. Appréciez une allure fraîche et un confort durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 5,
        ],      
        ['name' => 'Jupe',
        'description' => "Retrouvez la splendeur de vos jupes préférées avec notre service de nettoyage spécialisé. Chaque jupe est inspectée, nettoyée avec délicatesse, et les taches sont traitées. Appréciez une allure impeccable et un confort durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 5,
        ],      
        ['name' => 'Short',
        'description' => "Ravivez la fraîcheur de vos shorts  préférés avec notre service de nettoyage spécialisé. Chaque short est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'un look décontracté impeccable et d'un confort durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 3,
        ],      
        ['name' => 'Manteau',
        'description' => "Restaurez l'élégance de vos manteaux avec notre service de nettoyage spécialisé. Chaque manteau est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une allure chic et d'une fraîcheur durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 10,
        ],      
        ['name' => 'Blouson',
        'description' => "Restaurez l'élégance de vos blouson avec notre service de nettoyage spécialisé. Chaque blouson est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une allure chic et d'une fraîcheur durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 10,
        ],      
        ['name' => 'Parka',
        'description' => "Restaurez l'élégance de vos parka avec notre service de nettoyage spécialisé. Chaque parka est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une allure chic et d'une fraîcheur durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 10,
        ],      
        ['name' => 'Costume',
        'description' => "Restaurez l'élégance de vos costume avec notre service de nettoyage spécialisé. Chaque blouson est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une allure chic et d'une fraîcheur durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 12,
        ],      
        ['name' => 'Robe de soirée',
        'description' => "Sublimez l'éclat de vos robes de soirée élégantes avec notre service de nettoyage spécialisé. Chaque robe est méticuleusement traitée, garantissant fraîcheur et perfection. Offrez à vos tenues de soirée une touche professionnelle pour briller à chaque événement avec une allure impeccable et étincelante.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 12,
        ],      
        ['name' => 'Robe de cocktail',
        'description' => "Restaurez l'élégance de vos blouson avec notre service de nettoyage spécialisé. Chaque manteau est inspecté, nettoyé délicatement, et les taches sont traitées. Profitez d'une allure chic et d'une fraîcheur durable grâce à notre expertise en nettoyage professionnel.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 20,
        ],      
        ['name' => 'Robe de mariage',
        'description' => "Préservez la magie de votre robe de mariée avec notre service de nettoyage spécialisé. Chaque détail est traité avec délicatesse, assurant fraîcheur et éclat. Offrez à votre robe de mariage l'attention qu'elle mérite, pour conserver les souvenirs inoubliables de votre journée spéciale.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 30,
        ],      
        ['name' => 'Robes de communion',
        'description' => "Confiez-nous la délicate robe de communion pour un nettoyage professionnel minutieux. Chaque robe est inspectée, traitée avec soin pour éliminer les taches, puis nettoyée de manière experte. Bénéficiez de l'assurance d'une robe d'apparence fraîche et d'une pureté préservée grâce à notre service spécialisé.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 20,
        ],      
        ['name' => 'Robe de baptême',
        'description' => "Confiez-nous la robe de baptême, symbole de pureté et d'innocence, pour un nettoyage professionnel en profondeur. Chaque détail est minutieusement inspecté, chaque tache traitée avec délicatesse, puis la robe est nettoyée avec soin. Ressentez la certitude d'une robe fraîchement nettoyée, révélant toute sa grâce et sa pureté.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 15,
        ],      
        ['name' => 'Tenues de jogging',
        'description' => "Entretenez votre partenaire d'entraînement: nettoyage expert de votre jogging pour une performance optimale et un confort durable!",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 6,
        ],      
        ['name' => 'Leggings de sport',
        'description' => "Seconde vie pour vos leggings de sport: nettoyage expert pour un legging comme neuf, confort optimal et performance durable! Un geste pour la planète.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 3.5,
        ],      
        ['name' => 'Maillots de sport',
        'description' => "Redonnez vie à vos maillots de sport préférés grâce à notre nettoyage spécialisé: adieu odeurs, taches et performance optimale!",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 3,
        ],      
        ['name' => 'Short de sport',
        'description' => "Confiez-nous la robe de baptême, symbole de pureté et d'innocence, pour un nettoyage professionnel en profondeur. Chaque détail est minutieusement inspecté, chaque tache traitée avec délicatesse, puis la robe est nettoyée avec soin. Ressentez la certitude d'une robe fraîchement nettoyée, révélant toute sa grâce et sa pureté.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 3,
        ],      
        ['name' => 'Drap ',
        'description' => "Offrez à vos draps un sommeil de rêve. Sublimez vos draps avec notre service de nettoyage expert. Chaque drap est inspecté et nettoyé délicatement. Taches traitées et résultat impeccable. Parfum subtil et fraîcheur longue durée.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 4.50,
        ],      
        ['name' => 'Couette',
        'description' => "Offrez à votre couette une renaissance douillette. Réveillez l'éclat de votre couverture chérie grâce à notre service de nettoyage expert. Un soin sur mesure pour chaque fibre, chaque tissage, chaque besoin. Taches rebelles ? Notre talent de détacheur s'en charge, sans laisser de trace. Parfum délicat et fraîcheur durable pour un cocooning inoubliable.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 7,
        ],      
        ['name' => 'Taie',
        'description' => "Offrez à vos oreillers un sommeil de rêve. Sublimez vos oreillers avec notre service de nettoyage expert.Chaque taie d'oreiller est inspecté et nettoyé délicatement. Taches traitées et résultat impeccable. Fraîcheur longue durée pour un sommeil sain.",
        'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png',
        'price' => 2,
        ],      
    ];




    
    public function load(ObjectManager $manager): void
    {
       

        
        foreach (self::CATEGORIES as $categoryArray) {
            $category = new Category();

            $category->setName($categoryArray ['name']);

            $manager->persist($category);

            
            foreach (self::PRODUCTS as $productArray) {
                $product = new Product();

                $product->setName($productArray['name'])
                ->setPicture($productArray['picture'])
                ->setDescription($productArray['description'])
                ->setPrice($productArray['price'])
                ->setCategory($category);

                $manager->persist($product);
            }
        }


        $user = new User();

        $user->setName('Kadouri')
        ->setFirstName('Nabil')
        ->setPhone('0785662233')
        ->setEmail('kadouri@gmail.com')
        ->setPassword('test')
        ->setAdress('89 Rue du Puits Vieux');

         $manager->persist($user);

        $manager->flush();
   
    }
}