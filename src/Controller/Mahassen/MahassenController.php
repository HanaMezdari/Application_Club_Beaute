<?php

namespace App\Controller\Mahassen;

use App\Entity\Services;
use App\Entity\Servicemahassen;
use App\Entity\Calendarmahassen;
use App\Entity\Reservationmahassen;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class MahassenController extends AbstractDashboardController
{
    /**
     * @Route("/Mahassen", name="Mahassen")
     */
    public function index(): Response
    {
        return $this->render('servicemahassen/interface.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('App Beaute');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('servicemahassen', 'fas fa-list', Servicemahassen::class);
        yield MenuItem::linkToCrud('services', 'fas fa-tags', Services::class);
        yield MenuItem::linkToCrud('Reservation Mahassen', 'fas fa-tags', Reservationmahassen::class);
        yield MenuItem::linkToCrud('Calendrier Mahassen', 'fas fa-tags', Calendarmahassen::class);
    }
}
