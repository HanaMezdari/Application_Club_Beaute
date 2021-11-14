<?php

namespace App\Controller\Violette;

use App\Entity\Services;
use App\Entity\Serviceviolette;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class VioletteController extends AbstractDashboardController
{
    /**
     * @Route("/Violette", name="Violette")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('App Beaute');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('serviceviolette', 'fas fa-list', Serviceviolette::class);
        yield MenuItem::linkToCrud('services', 'fas fa-list', Services::class);
    }
}
