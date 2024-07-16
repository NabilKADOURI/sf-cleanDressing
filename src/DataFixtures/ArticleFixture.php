<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ArticleFixture extends Fixture
{
    public const ARTICLES = [

        ['title' => "Astuces repassage",
        'subtitle'=> "Conseils Pratiques pour un Repassage Parfait",
        'picture' => "/Business-case-images/img-webp/astuce-repassage_resultat.webp",
        'description' => "1 - Repasser avec un fer à bonne température.
Commencer par trier le linge selon la température de repassage requise. Débuter par ceux qui nécessitent la température la plus basse en allant vers ceux qui nécessitent la température la plus haute :
Matières synthétiques : polyamide, acrylique, viscose, rayonne, Nylon®… : Fer froid (110°C)
Matières d’origine animale : laine, soie, cachemire, angora, mohair… : Fer Chaud (150°C)
Matières d‘origine végétale : lin, coton, chanvre, bambou, toile de jute… : Fer très chaud (200°C)

2 – Repasser le linge légèrement humide.
Si votre linge est déjà sec, vous pouvez vaporiser de l’eau tiède dessus un peu avant le repassage.

3- L’amidon l’allié de notre linge
L’amidon est un produit très efficace qui facilite le repassage et assure une bonne tenue aux vêtements (souvent utilisé pour les chemises). Il est également efficace contre les tâches et la poussière.
Vaporiser l’amidon à l’intérieur du vêtement avant de le mettre en boule : cela permet une meilleure pénétration du produit dans la fibre textile. Le repassage doit s’effectuer sur un linge encore humide.
4- Un bon matériel
Pour un repassage impeccable il est indispensable d’avoir un bon fer à repasser (le top : la centrale vapeur) ainsi qu’une planche à repasser bien tapissée afin d’éviter les marques sur les vêtements.
5 – Repasser votre linge à l’envers
Cela évite d’abimer ou de tâcher le linge.

6 – Bien disposer son linge sur la table
Mettre votre linge bien à plat sur la table et passez votre main dessus afin d'effacer tous les plis.

7- Commencer votre repassage par le centre du vêtement
Ensuite repasser vers l'extérieur, puis le col, les poignets et les manches, ensuite la rangée de boutons (en commençant par le revers), le dos, le devant et enfin, les épaules.

8- Repasser toujours en effectuant des mouvements de haut en bas.
Eviter les mouvements circulaires qui étirent vêtements et tissus.
9- Repasser dans le sens de la longueur les froissures tenaces.
Mouillez les faux plis à l’aide d’un vaporisateur d’eau puis passer le fer à repasser dessus.
10 - Repasser en toute sécurité
Eloigner les jeunes enfants du fer encore chaud.
Laisser refroidir le fer au moins 15 minutes avant de le ranger.
Ne jamais laisser un fer à plat lorsqu’il est branché.",
        'dateCreate' => "2024-06-30",
       ],
        ['title' => "Le blanc",
        'subtitle'=> "Le Blanc Parfait : Trucs et Astuces Incontournables",
        'picture' => "/Business-case-images/img-webp/astuce-blanc_resultat.webp",
        'description' => "1. Ne mélangez pas vos blancs avec d’autres couleurs, aussi pâles soient-elles. Évitez également de mettre une trop grande quantité de vêtements dans la machine. Ils doivent pouvoir circuler librement dans l’eau afin d'être bien nettoyés. 

2. Avant de nettoyer, soyez certain de prétraiter les taches avec un produit approprié.

3. Oubliez l’eau de javel et optez plutôt pour un mélange de 1/4 de tasse de jus de citron ajouté à votre lessive. À défaut du jus de citron, le bicarbonate de soude et le vinaigre sont d’excellents blanchissants. Vous pouvez ajouter une demi-tasse de bicarbonate de soude à votre détergent au début du cycle. Ensuite, juste avant le cycle de rinçage, versez une demi-tasse de vinaigre blanc dans la laveuse. Ne vous inquiétez pas pour l’odeur de vinaigre, elle disparaîtra avec le rinçage.

4. Une eau plus chaude aide à garder les blancs plus éclatants. Assurez-vous par contre que le tissu peut le tolérer. Référez-vous à l’étiquette du fabricant.

5. Le soleil est votre meilleur allié pour redonner la blancheur au tissu, alors oubliez la sécheuse et faites sécher les vêtements à l’extérieur! Si vous devez absolument utiliser la sécheuse, éviter les températures trop hautes, au risque de faire jaunir les tissus. Retirez-les aussitôt secs!",
        'dateCreate' => "2024-05-15",
       ],
        ['title' => "Fibres naturelles",
        'subtitle'=> "Entretien et soin des fibres naturelles",
        'picture' => "/Business-case-images/img-webp/astuce-fibre_resultat.webp",
        'description' => "1. Lire les étiquettes de soin
Consulter les instructions : Vérifiez toujours l'étiquette d'entretien pour des instructions spécifiques concernant le lavage, le séchage et le repassage.
2. Tri du linge
Séparer les couleurs : Triez les vêtements par couleur (blancs, couleurs claires, couleurs foncées) pour éviter les décolorations.
Classer par type de fibre : Lavez séparément les fibres délicates comme la soie et la laine des autres tissus.
3. Préparation avant lavage
Traitement des taches : Appliquez un détachant adapté aux fibres naturelles avant le lavage si nécessaire.
Fermeture des zips et boutons : Fermez les fermetures éclair, les boutons et retournez les vêtements à l'envers pour protéger les fibres.
4. Choix du détergent
Utiliser des détergents doux : Optez pour des lessives douces sans agents blanchissants pour ne pas endommager les fibres naturelles.
5. Température de lavage
Coton et lin : Lavez à l'eau tiède (30-40°C) pour éviter le rétrécissement.
Laine et soie : Utilisez un cycle de lavage à froid ou à main à une température maximale de 30°C.
6. Cycle de lavage
Cycle délicat : Sélectionnez un cycle de lavage délicat pour les fibres naturelles afin de réduire l'agitation et éviter les dommages.
7. Séchage
Séchage à l'air libre : Préférez sécher les vêtements à l'air libre sur un cintre ou à plat, loin de la lumière directe du soleil pour éviter la décoloration.
Séchage en machine : Si nécessaire, utilisez le réglage le plus bas de la sécheuse, mais il est généralement préférable d'éviter la sécheuse pour les fibres naturelles.
8. Repassage
Réglage de température : Repasser à la température appropriée pour chaque type de fibre (coton et lin à haute température, laine et soie à basse température).
Utiliser une pattemouille : Pour les fibres délicates comme la soie, utilisez un tissu humide entre le fer et le vêtement pour éviter les brûlures et les marques.
9. Rangement
Stockage approprié : Conservez les vêtements en fibres naturelles dans un endroit frais et sec. Utilisez des housses de protection en coton pour éviter la poussière et la lumière.
Prévention des mites : Pour la laine, ajoutez des sachets anti-mites dans les tiroirs ou les placards.
En suivant ces étapes, vous pouvez prolonger la durée de vie de vos vêtements en fibres naturelles et les maintenir en bon état.. Pour les pièces fragiles le nettoyage à sec est obligatoire. ",
        'dateCreate' => "2024-04-03",
       ],
    ];

    public function load(ObjectManager $manager): void
    {

        foreach (self::ARTICLES as $articleArray) {

            $article = new Article();

            $article
            ->setTitle($articleArray['title'])
            ->setSubtitle($articleArray['subtitle'])
            ->setPicture($articleArray['picture'])
            ->setDescription($articleArray['description'])
            ->setDateCreate(new \DateTime($articleArray['dateCreate']));

            $manager->persist($article);

        }


        $manager->flush();
    }
}
