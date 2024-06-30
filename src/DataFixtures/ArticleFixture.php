<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class ArticleFixture extends Fixture
{
    public const ARTICLES = [

        ['title' => "Astuces repassage",
        'picture' => "/Business-case-images/img-webp/astuce-repassage_resultat.webp",
        'description' => "Humidifiez vos vêtements avant le repassage afin de les défroisser facilement. Nous vous recommandons également de repasser vos vêtements à l’envers et de protéger les textiles délicats en posant un linge sous le fer.",
        'dateCreate' => "2024-06-30",
       ],
        ['title' => "Le blanc",
        'picture' => "/Business-case-images/img-webp/astuce-blanc_resultat.webp",
        'description' => "Vos linges et vêtements blancs ont perdu de leur éclat ? Ils ont tendance à devenir gris ou à jaunir ? Premièrement, lavez le blanc ensemble et contrairement aux idées reçues n’employez jamais d’eau de javel qui détériorerait les fibres.",
        'dateCreate' => "2024-06-30",
       ],
        ['title' => "Fibres naturelles",
        'picture' => "/Business-case-images/img-webp/astuce-fibre_resultat.webp",
        'description' => "Vos fibres naturelles (la laine, le lin ou la soie…) nécessitent un lavage doux et un soin tout particulier. Pour les pièces fragiles le nettoyage à sec est obligatoire. ",
        'dateCreate' => "2024-06-30",
       ],
    ];

    public function load(ObjectManager $manager): void
    {

        foreach (self::ARTICLES as $articleArray) {

            $article = new Article();

            $article
            ->setTitle($articleArray['title'])
            ->setPicture($articleArray['picture'])
            ->setDescription($articleArray['description'])
            ->setDateCreate(new \DateTime($articleArray['dateCreate']));

            $manager->persist($article);

        }


        $manager->flush();
    }
}
