<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Contact;
use App\Entity\Employee;
use App\Entity\Item;
use App\Entity\Matter;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\Service;
use App\Entity\Status;
use App\Entity\Testimonial;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    private AdminUrlGenerator $adminUrlGenerator;

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Redirect to Order CRUD page
        return $this->redirect($this->adminUrlGenerator->setController(OrderCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('CleanDressing');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Orders');
        yield MenuItem::linkToCrud('Orders', 'fa-brands fa-dropbox', Order::class);
        yield MenuItem::linkToCrud('Items', 'fa-solid fa-cart-shopping', Item::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Status', 'fa-solid fa-bars-progress', Status::class)->setPermission('ROLE_ADMIN');

        yield MenuItem::section('Account')->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Users', 'fa-regular fa-user', User::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Employee', 'fa-regular fa-user', Employee::class)->setPermission('ROLE_ADMIN');

        yield MenuItem::section('Benefit')->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Categories', 'fa-solid fa-list', Category::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Products', 'fa-brands fa-product-hunt', Product::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Services', 'fa-solid fa-hand-sparkles', Service::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Matters', 'fa-solid fa-recycle', Matter::class)->setPermission('ROLE_ADMIN');

        yield MenuItem::section('Messaging')->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Contacts', 'fa-regular fa-id-card', Contact::class)->setPermission('ROLE_ADMIN');

        yield MenuItem::section('Blog')->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Articles', 'fa-regular fa-id-card', Article::class)->setPermission('ROLE_ADMIN');

        yield MenuItem::section('Avis')->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Avis', 'fa-regular fa-id-card', Testimonial::class)->setPermission('ROLE_ADMIN');
        
        yield MenuItem::section('Exit');
        yield MenuItem::linkToLogout('Deconnexion', 'fa-solid fa-right-from-bracket');
    }
}
