<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Traits\ReadOnlyTrait;
use App\Controller\Admin\Traits\ViewAndDeleteTrait;
use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class ContactCrudController extends AbstractCrudController
{
    use ViewAndDeleteTrait;

    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    /**
     * Configure les champs affichés sur les différentes pages.
     */
    public function configureFields(string $pageName): iterable
    {
        return [
             // Affiche l'ID, caché dans le formulaire de création/modification
            TextField::new('name', 'Nom'),  // Champ pour le nom
            TextField::new('firstName', 'Prénom'),  // Champ pour le prénom
            EmailField::new('email', 'E-mail'),  // Champ pour l'email
            TextField::new('object', 'Objet'),  // Champ pour l'objet du message
            TextareaField::new('message', 'Message')->hideOnIndex(),  // Champ pour le message, caché sur la page d'index
            DateTimeField::new('date', 'Date de réception')->hideOnForm(),  // Date, caché dans les formulaires
        ];
    }

    /**
     * Configure les filtres disponibles dans la vue d'index.
     */
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('name')  // Filtre par nom
            ->add('email')  // Filtre par email
            ->add('date');  // Filtre par date
    }

    /**
     * Personnalise les paramètres CRUD pour l'entité Contact.
     */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Contact')  // Label pour une seule entité
            ->setEntityLabelInPlural('Contacts')  // Label pour plusieurs entités
            ->setDefaultSort(['date' => 'DESC'])  // Tri par défaut par date décroissante
            ->setPaginatorPageSize(20);  // Nombre d'éléments par page
    }
}

