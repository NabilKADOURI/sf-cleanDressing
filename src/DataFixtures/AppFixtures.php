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
        ['name' => 'Chemise', 'description' => "Optimisez l'élégance de vos chemises avec notre service de nettoyage spécialisé.", 'picture' => 'chemise.webp', 'price' => 1, 'category' => 'LES HAUTS'],
        ['name' => 'Polo', 'description' => "Redonnez toute leur allure à vos polos grâce à notre service de nettoyage spécialisé..", 'picture' => 'polo.webp', 'price' => 1.50, 'category' => 'LES HAUTS'],
        ['name' => 'T-shirt', 'description' => "Rafraîchissez vos t-shirts préférés avec notre service de nettoyage spécialisé.", 'picture' => 't-shirt.webp', 'price' => 1.50, 'category' => 'LES HAUTS'],
        ['name' => 'Pull', 'description' => "Ravivez la douceur de vos pulls préférés avec notre service de nettoyage spécialisé", 'picture' => 'pull.webp', 'price' => 5, 'category' => 'LES HAUTS'],
        ['name' => 'Pantalon', 'description' => "Retrouvez la fraîcheur de vos pantalons préférés avec notre service de nettoyage spécialisé.", 'picture' => 'pantalon.webp', 'price' => 5, 'category' => 'LES BAS'],
        ['name' => 'Jean', 'description' => "Revitalisez l'aspect de vos jeans adorés avec notre service de nettoyage spécialisé.", 'picture' => 'jean.webp', 'price' => 5, 'category' => 'LES BAS'],
        ['name' => 'Robe', 'description' => "Retrouvez la splendeur de vos robes préférées avec notre service de nettoyage spécialisé.", 'picture' => 'robe.webp', 'price' => 6, 'category' => 'LES BAS'],
        ['name' => 'Short', 'description' => "Ravivez la fraîcheur de vos shorts  préférés avec notre service de nettoyage spécialisé.", 'picture' => 'short.webp', 'price' => 1, 'category' => 'LES BAS'],
        ['name' => 'Manteau', 'description' => "Restaurez l'élégance de vos manteaux avec notre service de nettoyage spécialisé.", 'picture' => 'manteau.webp', 'price' => 10, 'category' => "VETEMENTS D'HIVER"],
        ['name' => 'Blouson', 'description' => "Ravivez l'éclat de vos blousons avec notre service de nettoyage spécialisé.", 'picture' => 'blouson.webp', 'price' => 10, 'category' => "VETEMENTS D'HIVER"],
        ['name' => 'Parka', 'description' => "Préservez la qualité et la chaleur de vos parkas grâce à notre service de nettoyage spécialisé.", 'picture' =>'parka.webp', 'price' => 10, 'category' => "VETEMENTS D'HIVER"],
        ['name' => 'Costume', 'description' => "Restaurez l'élégance de vos costumes avec notre service de nettoyage spécialisé.", 'picture' => 'costume.webp', 'price' => 15, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de soirée', 'description' => "Sublimez l'éclat de vos robes de soirée avec notre service de nettoyage spécialisé", 'picture' => 'robe-de-soiree.webp', 'price' => 15, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de cocktail', 'description' => "Sublimez l'élégance de vos robes de cocktail avec notre service de nettoyage spécialisé.", 'picture' => 'robe-cocktail.webp', 'price' => 20, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de mariage', 'description' => "Confiez-nous votre précieuse robe de mariée pour un nettoyage professionnel en profondeur.", 'picture' => 'robe-mariage.webp', 'price' => 30, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robes de communion', 'description' => "Confiez-nous la délicate robe de communion pour un nettoyage professionnel minutieux.", 'picture' => 'robe-communion.webp', 'price' => 20, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Robe de baptême', 'description' => "Confiez-nous la robe de baptême, symbole de pureté et d'innocence, pour un nettoyage professionnel en profondeur.", 'picture' => 'robe-de-bapteme.webp', 'price' => 15, 'category' => 'VETEMENTS DE CEREMONIE'],
        ['name' => 'Tenues de jogging', 'description' => "Entretenez votre partenaire d'entraînement: nettoyage expert de votre jogging pour une performance optimale et un confort durable!", 'picture' => 'jogging.webp', 'price' => 4, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Leggings de sport', 'description' => "Conservez la performance et la fraîcheur de vos leggings de sport grâce à notre service de nettoyage spécialisé.", 'picture' => 'legging.webp', 'price' => 1.5, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Maillots de sport', 'description' => "Maintenez la qualité et le confort de vos maillots de sport avec notre service de nettoyage spécialisé.", 'picture' => 'maillots.webp', 'price' => 1.50, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Short de sport', 'description' => "Prolongez la durée de vie de vos shorts de sport avec notre service de nettoyage spécialisé.", 'picture' => 'short-sport.webp', 'price' => 1.5, 'category' => 'VETEMENTS DE SPORT'],
        ['name' => 'Drap', 'description' => "Redonnez une propreté impeccable à vos draps avec notre service de nettoyage spécialisé.", 'picture' => 'drap.webp', 'price' => 4.50, 'category' => 'LES LINGES DE LIT'],
        ['name' => 'Couette', 'description' => "Offrez une nouvelle fraîcheur à vos couettes avec notre service de nettoyage spécialisé.", 'picture' => 'couette.webp', 'price' => 14.50, 'category' => 'LES LINGES DE LIT'],
        ['name' => 'Taie', 'description' => "Apportez une douceur renouvelée à vos taies d'oreiller grâce à notre service de nettoyage spécialisé.", 'picture' => 'taie.webp', 'price' => 1.20, 'category' => 'LES LINGES DE LIT'],
        ['name' => 'Draps housse', 'description' => "Offrez à vos draps un sommeil de rêve. Sublimez vos draps avec notre service de nettoyage expert.", 'picture' => 'drap-housse.webp', 'price' => 3.20, 'category' => 'LES LINGES DE LIT'],
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
