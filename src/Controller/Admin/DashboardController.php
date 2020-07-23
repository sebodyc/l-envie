<?php

namespace App\Controller\Admin;

use App\Entity\Dessert;
use App\Entity\Entree;
use App\Entity\Menu;
use App\Entity\Plat;
use App\Entity\PlatDuJour;
use App\Entity\Suggestion;
use App\Entity\Vins;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle("L'Envie admin");
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Plat du jour', 'fas fa-cookie', PlatDuJour::class);
        yield MenuItem::linkToCrud('Suggestion', 'fa fa-cookie', Suggestion::class);
        yield MenuItem::linkToCrud('les entrées', 'fa fa-utensils', Entree::class);
        yield MenuItem::linkToCrud('les plats', 'fa fa-drumstick-bite', Plat::class);
        yield MenuItem::linkToCrud('les dessert', 'fa fa-ice-cream', Dessert::class);
        yield MenuItem::linkToCrud('les vins', 'fa fa-wine-glass-alt', Vins::class);
    }
}
