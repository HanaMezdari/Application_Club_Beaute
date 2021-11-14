<?php

namespace App\Controller\Fleurdelys;

use App\Entity\Services;
use App\Entity\Servicefleurdelys;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class FleurdelysController extends AbstractDashboardController
{
    /**
     * @Route("/Fleur", name="Fleur")
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
        yield MenuItem::linkToCrud('servicefleurdelys', 'fas fa-list', Servicefleurdelys::class);
        yield MenuItem::linkToCrud('services', 'fas fa-list', Services::class);
    }
}
