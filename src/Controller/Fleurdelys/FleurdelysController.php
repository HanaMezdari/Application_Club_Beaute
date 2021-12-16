<?php

namespace App\Controller\Fleurdelys;

use App\Entity\Services;
use App\Entity\Calendarfleur;
use App\Entity\Reservationfleur;
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
        return $this->render('servicefleurdelys/interface.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('App Beaute');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('servicefleurdelys', 'fas fa-user-tag ', Servicefleurdelys::class);
        yield MenuItem::linkToCrud('services', 'fas fa-tags', Services::class);
        yield MenuItem::linkToCrud('Reservation Fleur De Lys', 'fas fa-tags', Reservationfleur::class);
        yield MenuItem::linkToCrud('Calendrier Fleur De Lys', 'fas fa-tags', Calendarfleur::class);

    }
}
