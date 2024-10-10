<?php

namespace App\EventListener;

use App\Entity\Article;
use App\Entity\Product;
use App\Entity\Service;
use Doctrine\ORM\Events;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\PreRemoveEventArgs;
use Symfony\Component\Filesystem\Filesystem;

#[AsDoctrineListener(Events::preRemove)]
class DeletePictureListener 
{

    public function __construct(private Filesystem $filesystem) {}

    public function preRemove(PreRemoveEventArgs $event): void
    {
        $entity = $event->getObject();

        if (!$entity instanceof Service && !$entity instanceof Product && !$entity instanceof Article) {
          return; // Si ce n'est pas le cas, on ne fait rien et on quitte la méthode
      }

      // Suppression du fichier associé à l'entité (suppose que 'getPicture' retourne le nom du fichier)
      $this->filesystem->remove('uploads/' . $entity->getPicture());
    }
}