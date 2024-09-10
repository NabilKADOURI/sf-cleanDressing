<?php

namespace App\EventListener;

use App\Entity\Order;
use Doctrine\ORM\Events;
use App\Repository\StatusRepository;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;

#[AsDoctrineListener(Events::prePersist)]
class DefaultStatusListener
{
    public function __construct(private StatusRepository $statusRepository) {}

    public function prePersist(PrePersistEventArgs $event): void
    {
        $entity = $event->getObject();

        if (!$entity instanceof Order) {
            return;
        }

        $defaultStatus = $this->statusRepository->findOneByName('En attente de validation');
        $entity->setStatus($defaultStatus);
    }
}