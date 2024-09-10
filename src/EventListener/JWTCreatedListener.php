<?php

namespace App\EventListener;


use App\Repository\StatusRepository;
use App\Repository\UserRepository;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;
use Symfony\Component\HttpFoundation\RequestStack;


class JWTCreatedListener
{
    // Déclaration du constructeur avec injection des dépendances
    public function __construct(
        private RequestStack $requestStack,       
        private UserRepository $userRepository,   
        private StatusRepository $statusRepository 
    ) {
    }

    // Méthode appelée lors de la création du JWT
    public function onJWTCreated(JWTCreatedEvent $event): void
    {
        // Récupération des données du payload du JWT
        $payload = $event->getData();

        // Recherche de l'utilisateur par son email (utilisé comme nom d'utilisateur)
        $user = $this->userRepository->findOneByEmail($payload["username"]);

        // Ajout de l'ID de l'utilisateur au payload du JWT
        $payload['user_id'] = $user->getId();

        // Mise à jour des données du JWT avec le nouveau payload
        $event->setData($payload);
    }
}
