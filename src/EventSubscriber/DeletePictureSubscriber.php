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

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityDeletedEvent::class => ['deleteUploads'],
        ];
    }

    public function deleteUploads(BeforeEntityDeletedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!$entity instanceof Service && !$entity instanceof Product && !$entity instanceof Article) {
            return;
        }

        $this->filesystem->remove('uploads/' . $entity->getPicture());
    }
}
