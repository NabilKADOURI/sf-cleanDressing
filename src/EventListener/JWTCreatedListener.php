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
        private RequestStack $requestStack,       // Objet pour accéder à la requête actuelle
        private UserRepository $userRepository,   // Repository pour accéder aux utilisateurs
        private StatusRepository $statusRepository // Repository pour accéder aux statuts
    ) {
    }

    // Méthode appelée lors de la création du JWT
    public function onJWTCreated(JWTCreatedEvent $event): void
    {
        // Récupération des données du payload du JWT
        $payload = $event->getData();

        // Recherche de l'utilisateur par son email (utilisé comme nom d'utilisateur)
        $user = $this->userRepository->findOneByEmail($payload["username"]);

        // Recherche d'un statut spécifique par son nom
        $status = $this->statusRepository->findOneByName('En attente de validation');

        // Ajout de l'ID de l'utilisateur au payload du JWT
        $payload['user_id'] = $user->getId();

        // Ajout de l'ID du statut au payload du JWT
        $payload['status_id'] = $status->getId();

        // Mise à jour des données du JWT avec le nouveau payload
        $event->setData($payload);
    }
}
