<?php

namespace App\EventListener;

use App\Entity\Order;
use Doctrine\ORM\Events;
use App\Repository\StatusRepository;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Symfony\Bundle\SecurityBundle\Security;

#[AsDoctrineListener(Events::prePersist)]
class AddUserToOrderListener
{
    public function __construct(private Security $security) {}

    public function prePersist(PrePersistEventArgs $event): void
    {
        $entity = $event->getObject();

        if (!$entity instanceof Order) {
            return;
        }
        $entity->setUserOrder($this->security->getUser());
    }
}