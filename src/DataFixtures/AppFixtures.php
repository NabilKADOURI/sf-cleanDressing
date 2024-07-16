<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Matter;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const CATEGORIES = [
        ['name' => 'Hauts', 'picture' => '/Business-case-images/img-webp/les-bas_resultat_resultat.webp'],
        ['name' => 'Bas', 'picture' => '/Business-case-images/img-webp/les-bas_resultat_resultat.webp'],
        ['name' => 'Speciaux', 'picture' => '/Business-case-images/img-webp/cuir-et-daim_resultat.webp'],
        ['name' => 'Cérémonie', 'picture' => '/Business-case-images/img-webp/cérémonie_resultat.webp'],
        ['name' => 'Sports', 'picture' => '/Business-case-images/img-webp/sport.webp'],
        ['name' => 'Linge de lit', 'picture' => '/Business-case-images/img-webp/linge-de-lit_resultat.webp'],
    ];

    public const PRODUCTS = [
        ['name' => 'Chemise', 'description' => "Description for Chemise", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 2, 'category' => 'Hauts'],
        ['name' => 'T-shirt', 'description' => "Description for T-shirt", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 1.50, 'category' => 'Hauts'],
        ['name' => 'Pull', 'description' => "Description for Pull", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 5, 'category' => 'Hauts'],
        ['name' => 'Pontalon', 'description' => "Description for Pontalon", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 5, 'category' => 'Bas'],
        ['name' => 'Jean', 'description' => "Description for Jean", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 5, 'category' => 'Bas'],
        ['name' => 'Jupe', 'description' => "Description for Jupe", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 5, 'category' => 'Bas'],
        ['name' => 'Short', 'description' => "Description for Short", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 3, 'category' => 'Bas'],
        ['name' => 'Manteau', 'description' => "Description for Manteau", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 10, 'category' => 'Speciaux'],
        ['name' => 'Blouson', 'description' => "Description for Blouson", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 10, 'category' => 'Speciaux'],
        ['name' => 'Parka', 'description' => "Description for Parka", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 10, 'category' => 'Speciaux'],
        ['name' => 'Costume', 'description' => "Description for Costume", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 12, 'category' => 'Cérémonie'],
        ['name' => 'Robe de soirée', 'description' => "Description for Robe de soirée", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 12, 'category' => 'Cérémonie'],
        ['name' => 'Robe de cocktail', 'description' => "Description for Robe de cocktail", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 20, 'category' => 'Cérémonie'],
        ['name' => 'Robe de mariage', 'description' => "Description for Robe de mariage", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 30, 'category' => 'Cérémonie'],
        ['name' => 'Robes de communion', 'description' => "Description for Robes de communion", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 20, 'category' => 'Cérémonie'],
        ['name' => 'Robe de baptême', 'description' => "Description for Robe de baptême", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 15, 'category' => 'Cérémonie'],
        ['name' => 'Tenues de jogging', 'description' => "Description for Tenues de jogging", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 6, 'category' => 'Sports'],
        ['name' => 'Leggings de sport', 'description' => "Description for Leggings de sport", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 3.5, 'category' => 'Sports'],
        ['name' => 'Maillots de sport', 'description' => "Description for Maillots de sport", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 3, 'category' => 'Sports'],
        ['name' => 'Short de sport', 'description' => "Description for Short de sport", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 3, 'category' => 'Sports'],
        ['name' => 'Drap', 'description' => "Description for Drap", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 4.50, 'category' => 'Linge de lit'],
        ['name' => 'Couette', 'description' => "Description for Couette", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 7, 'category' => 'Linge de lit'],
        ['name' => 'Taie', 'description' => "Description for Taie", 'picture' => 'https://www.esatmarsoulan.fr/wp-content/uploads/2022/01/visuel_big_pressing.png', 'price' => 2, 'category' => 'Linge de lit'],
    ];

    public const MATTERS = [
        ['name' => 'Laine', 'price' => '2'],
        ['name' => 'coton', 'price' => '1'],

    ];

    public function load(ObjectManager $manager): void
    {
        $categoryEntities = [];
        
       
        foreach (self::CATEGORIES as $categoryArray) {
            $category = new Category();
            $category->setName($categoryArray['name'])
                     ->setPicture($categoryArray['picture']);

            $manager->persist($category);
            $categoryEntities[$categoryArray['name']] = $category;
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

        
      

        $manager->flush();
    }
}
