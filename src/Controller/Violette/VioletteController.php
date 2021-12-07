<?php

namespace App\Controller\Violette;

use App\Entity\Services;
use App\Entity\Serviceviolette;
use App\Entity\Reservationviolette;
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
        return $this->render('serviceviolette/interface.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('App Beaute');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Serviceviolette', 'fas fa-user-tag', Serviceviolette::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-tags', Services::class);
        yield MenuItem::linkToCrud('Reservation Violette', 'fas fa-tags', Reservationviolette::class);
    }
}
