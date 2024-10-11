<?php

namespace App\EventListener;

use App\Entity\Order;
use App\Entity\User;
use Doctrine\ORM\Events;
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
        
        $user = $this->security->getUser();

        if (!$user instanceof User) {
            throw new \Exception("No authenticated user found.");
        }
        $entity->setUserOrder($user);


    }
}