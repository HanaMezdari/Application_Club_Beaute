<?php

namespace App\Controller\Liliabenaziza;

use App\Entity\Calendar;
use App\Entity\Services;
use App\Entity\Servicelilia;
use App\Entity\Reservationlilia;
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
        yield MenuItem::linkToCrud('Service Lilia', 'fas fa-user-tag', Servicelilia::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-tags', Services::class);
        yield MenuItem::linkToCrud('Reservation Lilia', 'fas fa-tags', Reservationlilia::class);
        yield MenuItem::linkToCrud('Calendrier Lilia', 'fas fa-tags', Calendar::class);
    }
}
