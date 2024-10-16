<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Matter;
use App\Entity\Product;
use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const CATEGORIES = [
        ['name' => 'LES HAUTS', 'picture' => 'categorie-les-hauts.jpg'],
        ['name' => 'LES BAS', 'picture' => 'categorie-les-bas.jpg'],
        ['name' => "VETEMENTS D'HIVER", 'picture' => 'categorie-hivers.jpg'],
        ['name' => 'VETEMENTS DE CEREMONIE', 'picture' => 'categorie-ceremonie.jpg'],
        ['name' => 'VETEMENTS DE SPORT', 'picture' => 'categorie-sport.jpg'],
        ['name' => 'LES LINGES DE LIT', 'picture' => 'categorie-linges-de-lit.jpg'],
    ];

    public const PRODUCTS = [
        ['name' => 'Chemise', 'description' => "Optimisez l'élégance de vos chemises avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/chemisier-blanc-decontracte-mode-feminine_53876-101510.webp?t=st=1721314881~exp=1721318481~hmac=e78e31fbcc125cfadf428badea7b4957c4b2e9a9f6078678d638f253fd02c0cf&w=740', 'price' => 1, 'category' => 'LES HAUTS'],
        ['name' => 'Polo', 'description' => "Redonnez toute leur allure à vos polos grâce à notre service de nettoyage spécialisé..", 'picture' => 'https://img.freepik.com/photos-gratuite/chemise-blanche-table_144627-15042.webp?t=st=1721314931~exp=1721318531~hmac=faf72fd96acb39422b00362f81045c5076e45146be05762725e38e41decbf909&w=740', 'price' => 1.50, 'category' => 'LES HAUTS'],
        ['name' => 'T-shirt', 'description' => "Rafraîchissez vos t-shirts préférés avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/tshirt-regular-uni-blanc-fond-gris_125540-2892.webp?t=st=1721315050~exp=1721318650~hmac=f8d447c6219d8784a14b65012b8b46bd458cef465f8e33d48a0e1938545a761f&w=996', 'price' => 1.50, 'category' => 'LES HAUTS'],
        ['name' => 'Pull', 'description' => "Ravivez la douceur de vos pulls préférés avec notre service de nettoyage spécialisé", 'picture' => 'https://img.freepik.com/photos-gratuite/pull-blanc-devant_125540-793.webp?t=st=1721315121~exp=1721318721~hmac=ecc21c7e49fa5507fe4ca3717852e7970e9a3c628dacd0a5e2cd80c55ccfc2a6&w=900', 'price' => 5, 'category' => 'LES HAUTS'],
        ['name' => 'Pontalon', 'description' => "Retrouvez la fraîcheur de vos pantalons préférés avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/pantalon_1203-8309.webp?t=st=1721315185~exp=1721318785~hmac=5960c40f9548e5e0cddcc57d697d1da2049635b9eb67018f42da0c9468424dde&w=360', 'price' => 5, 'category' => 'LES BAS'],
        ['name' => 'Jean', 'description' => "Revitalisez l'aspect de vos jeans adorés avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/jeans_1203-8093.webp?t=st=1721315199~exp=1721318799~hmac=89fdce921a29532a140b839ad0a4f9e73a5be33588abc824202aedf4e403cc0a&w=740', 'price' => 5, 'category' => 'LES BAS'],
        ['name' => 'Robe', 'description' => "Retrouvez la splendeur de vos robes préférées avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/femme-mode-vetements_1203-7413.webp?t=st=1721315829~exp=1721319429~hmac=0711ff2d86ac55b41509c0dba962d5799ecf98943d4c909b63897e601464eae5&w=360', 'price' => 6, 'category' => 'LES BAS'],
        ['name' => 'Short', 'description' => "Ravivez la fraîcheur de vos shorts  préférés avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/pantalons-courts-pour-hommes-decontractes_1203-8186.webp?t=st=1721315896~exp=1721319496~hmac=8d733bc010765b604130fce4b178aedf4b365dd4bee97c869610780f0d241a3d&w=740', 'price' => 1, 'category' => 'LES BAS'],
        ['name' => 'Manteau', 'description' => "Restaurez l'élégance de vos manteaux avec notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSZrdE-K0MuZzsMJubFNACqxoBcsVZtE-2OaNxgETY-l3hPkgfw5p9nqU7xNkX6MGQTFPRfGiCM-Z8wD1tc1O0kKD4W_Kw7LfO2qMJpNsHLuwB6XdNtLpch9Dpr4m13RDYiA71TEA&usqp=CAc', 'price' => 10, 'category' => "VETEMENTS D'HIVER"],
        ['name' => 'Blouson', 'description' => "Ravivez l'éclat de vos blousons avec notre service de nettoyage spécialisé.", 'picture' => 'https://img.freepik.com/photos-gratuite/rendu-nature-morte-affichage-vestes_23-2149745027.webp?t=st=1721316683~exp=1721320283~hmac=c8385682a0c2d6c5482c5f3928d29e62d57e5fbd33617644f3cf5ad5e0b1727f&w=360', 'price' => 10, 'category' => "VETEMENTS D'HIVER"],
        ['name' => 'Parka', 'description' => "Préservez la qualité et la chaleur de vos parkas grâce à notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRjeCdqR7VRb7SbUECqOLn-ML1KZKZHOVJ0EKKl9_FyVQ2fVFGnj17m4Qf-KEht1tACPy8InYof2UFfKn2Fka7SIcYZu3kERqmJ-eyBz1_HlasxtFcgkXFC1GW45eiphZRHTWoNUIhxeg&usqp=CAc', 'price' => 10, 'category' => "VETEMENTS D'HIVER"],
        ['name' => 'Costume', 'description' => "Restaurez l'élégance de vos costumes avec notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSRN_NenSyMpTB8gg3uPu-ijJdN_cSRlEUzYdLF0hSDO7DMCzdlJmjscZTdlqflp65KIL72vGl-NhNOkUCP4zXhA8EE14j5r2EJlmK028pNCHYHFQkyzomwdz6dFCmWcOaRXHBLef-UbTw&usqp=CAc', 'price' => 15, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de soirée', 'description' => "Sublimez l'éclat de vos robes de soirée avec notre service de nettoyage spécialisé", 'picture' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR_Vs5L6I9AKqDezxltbfnINlIShh89RwnWkjYhmjM4iZpJ4TF0E4lJlTOPr-LojMRgNGT_7FCqqB6GTdOh3iNpe-XU0krZ2ywMsePn3OyhtT1u9xkG3rKfBw&usqp=CAc', 'price' => 15, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de cocktail', 'description' => "Sublimez l'élégance de vos robes de cocktail avec notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTZ4eIipP_fTm-kr4xUOLvRLp_my2wQ2ftY0nEkxeJuxUpiuIY7oQV62ZqUxd6Ov9X2MgW66BJhx1_AJG9fuF7J55iJmdv9tSnFZlNp7JHa6I9RiGRYlO0cj9Gkt8A0sqU2TjVzvg&usqp=CAc', 'price' => 20, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de mariage', 'description' => "Confiez-nous votre précieuse robe de mariée pour un nettoyage professionnel en profondeur.", 'picture' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ_l4L1is4oj90YnIyuLNm4VmcpmAMvA5WpYeIL9mC_-vr60SNnwZAtDgrUVJlXemJpAhVV6sbhnUeJYPJucg471dMJAGphZN5Fl-ZrV9uSjMwLstMM2eqf7A&usqp=CAc', 'price' => 30, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robes de communion', 'description' => "Confiez-nous la délicate robe de communion pour un nettoyage professionnel minutieux.", 'picture' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQy38RwcQ16kyLfvAhRZj7c6Np8WetqOBxxCpAHuE9SZ8WzOma6KAGAC4y2wt-i2KlsO8RKgGL2YeSCBmkp_kdLLy3WY1qtN1HAxXSMnagKnIxeFMf_OQmpwA&usqp=CAc', 'price' => 20, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de baptême', 'description' => "Confiez-nous la robe de baptême, symbole de pureté et d'innocence, pour un nettoyage professionnel en profondeur.", 'picture' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTNGhWt2gK-8hsyP5ppIiCgFuSkkmtHD3TwNg7lLUvBl2OmpSS3Emgj6S3R4WWRe0B_G_d_L2p9xtpzWMyaS-sD8ttmdPI6tTE-b0NpC11hBrg1_xPdp1ag3w&usqp=CAc', 'price' => 15, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Tenues de jogging', 'description' => "Entretenez votre partenaire d'entraînement: nettoyage expert de votre jogging pour une performance optimale et un confort durable!", 'picture' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS2P2iF7BwaamtbGSFGMqPaOcB06EzsOX2uqdcyWQxVFO4JxCmsYGpcuPAtbNsd0S6bITb2GSVCHfO_D3aq22Y4rXo0pU2p0j2FIdJSkdAGHHV9Rq0HjtYVVBXbHa66L_OssEVup4YPBDw&usqp=CAc', 'price' => 4, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Leggings de sport', 'description' => "Conservez la performance et la fraîcheur de vos leggings de sport grâce à notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvJMsE_iVynEM4KQUgiRCVB-iEX2ezuSCSIQ&s', 'price' => 1.5, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Maillots de sport', 'description' => "Maintenez la qualité et le confort de vos maillots de sport avec notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRggrAYEbmgWoUUdlsT6ICNuuaWR6bgnKc8baXm3FKg3TVKvyr4-U-OmHIQxNkrX8PU-a4EwMTuaWsOvvbbH03NL__T7_AJMJJpPs86O5Pa5fYHjSEDZjQ_6Q&usqp=CAc', 'price' => 1.50, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Short de sport', 'description' => "Prolongez la durée de vie de vos shorts de sport avec notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRwycW_tkRhHyZ88z9ta3ADQotIIAVbbbG-Q&s', 'price' => 1.5, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Drap', 'description' => "Redonnez une propreté impeccable à vos draps avec notre service de nettoyage spécialisé.", 'picture' => 'https://www.textimed.fr/29626-large_default/drap-plat-resistant-100-coton-140-fils-amboise-117-grm.webp', 'price' => 4.50, 'category' => 'LES LINGES DE LIT'],
        ['name' => 'Couette', 'description' => "Offrez une nouvelle fraîcheur à vos couettes avec notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTmuc4Ev-1IkyHJZrlodOExZQOzd7YvewPXQXeXjdXGzw5rjMzOAH60MKVGPzc8pUvcrlTs8OmLYvwIsfltgvEWSGmiSsI2k3s8yIPq0bgecb-gFtZPvwvXqZxMyqH5VpNHxgOzfjPcaiU&usqp=CAc', 'price' => 14.50, 'category' => 'LES LINGES DE LIT'],
        ['name' => 'Taie', 'description' => "Apportez une douceur renouvelée à vos taies d'oreiller grâce à notre service de nettoyage spécialisé.", 'picture' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ3f9ARxoP-LSCcyViBgUvAXVRKbxX93OifEs29VzIkZLHCZtVqMFqN0lwpbAWI9-HMath0mfBBwSmMSxBRDmgxYhgAda8h3V6uic0LHk4flr9X-6VxFQDjZA&usqp=CAc', 'price' => 1.20, 'category' => 'LES LINGES DE LIT'],
        ['name' => 'Draps housse', 'description' => "Offrez à vos draps un sommeil de rêve. Sublimez vos draps avec notre service de nettoyage expert.", 'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb_PzejIJipUQZNU5P0auVoNQJuU_jjr3vsQ&s', 'price' => 3.20, 'category' => 'LES LINGES DE LIT'],
    ];

    public const MATTERS = [
        ['name' => 'coton', 'price' => '1'],
        ['name' => 'Laine', 'price' => '2'],
        ['name' => 'polyester', 'price' => '0.5'],
        ['name' => 'lin', 'price' => '2.5'],
        ['name' => 'soie', 'price' => '4'],
        ['name' => 'velours', 'price' => '3'],
        ['name' => 'cuirs', 'price' => '4'],
    ];

    public const STATUS = [
        'En attente de validation',
        'En cours',
        'Terminé',
    ];

    public function load(ObjectManager $manager): void
    {
        $categoryEntities = [];


        foreach (self::CATEGORIES as $categoryArray) {
            $category = new Category();
            $category->setName($categoryArray['name'])
                ->setPicture($categoryArray['picture']);

            $categoryEntities[$categoryArray['name']] = $category;
            $manager->persist($category);
        }

        foreach (self::MATTERS as $matterArray) {
            $matters = new Matter();
            $matters->setName($matterArray['name'])
                ->setPrice($matterArray['price']);

            $manager->persist($matters);
        }

        foreach (self::PRODUCTS as $productArray) {
            if (!isset($categoryEntities[$productArray['category']])) {
                throw new \Exception("Category {$productArray['category']} not found for product {$productArray['name']}");
            }
            $product = new Product();
            $product->setName($productArray['name'])
                ->setPicture($productArray['picture'])
                ->setDescription($productArray['description'])
                ->setPrice($productArray['price'])
                ->setCategory($categoryEntities[$productArray['category']])
                ->setMatter($matters);

            $manager->persist($product);
        }

        foreach (self::STATUS as $statusArray) {
            $status = new Status();
            $status->setName($statusArray);

            $manager->persist($status);
        }

        $manager->flush();
    }
}
