<?php

namespace App\EventSubscriber;

use App\Entity\Article;
use App\Entity\Product;
use App\Entity\Service;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityDeletedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Filesystem\Filesystem;

class DeletePictureSubscriber implements EventSubscriberInterface
{
    
    public function __construct(private Filesystem $filesystem)
    {
    }

    // Méthode pour s'abonner aux événements : spécifie les événements écoutés par ce subscriber
    public static function getSubscribedEvents()
    {
        return [
            // Écoute de l'événement 'BeforeEntityDeletedEvent' et appel de la méthode 'deleteUploads'
            BeforeEntityDeletedEvent::class => ['deleteUploads'],
        ];
    }

    // Méthode appelée avant la suppression d'une entité de la base de données
    public function deleteUploads(BeforeEntityDeletedEvent $event)
    {
        // Récupération de l'instance de l'entité concernée par l'événement
        $entity = $event->getEntityInstance();

        // Vérification si l'entité est une instance de Service, Product, ou Article
        if (!$entity instanceof Service && !$entity instanceof Product && !$entity instanceof Article) {
            return; // Si ce n'est pas le cas, on ne fait rien et on quitte la méthode
        }

        // Suppression du fichier associé à l'entité (suppose que 'getPicture' retourne le nom du fichier)
        $this->filesystem->remove('uploads/' . $entity->getPicture());
    }
}
