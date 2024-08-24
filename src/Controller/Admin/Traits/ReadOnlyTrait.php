<?php

namespace App\Controller\Admin\Traits;

use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

trait ReadOnlyTrait
{
    /**
     * Configure les actions pour l'entité, en mode lecture seule par défaut.
     *
     * @param Actions $actions
     * @return Actions
     */
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::EDIT)  // Désactiver la création et la modification
            ->add(Crud::PAGE_INDEX, Action::DETAIL)  // Ajouter l'action de détail sur la page d'index
            ->setPermission(Action::DELETE, 'ROLE_ADMIN');  // Restriction de la suppression aux administrateurs
    }
}

