<?php

namespace App\Controller\Liliabenaziza;

use App\Entity\Services;
use App\Entity\Servicelilia;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class LiliabenazizaController extends AbstractDashboardController
{
    /**
     * @Route("/Lilia", name="Lilia")
     */
    public function index(): Response
    {
        return $this->render('servicelilia/interface.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('App Beaute');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('servicelilia', 'fas fa-user-tag', Servicelilia::class);
        yield MenuItem::linkToCrud('services', 'fas fa-tags', Services::class);
    }
}
