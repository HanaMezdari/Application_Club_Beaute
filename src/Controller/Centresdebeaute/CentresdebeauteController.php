<?php

namespace App\Controller\Centresdebeaute;

use App\Entity\Services;
use App\Entity\Sousservice;
use App\Entity\Centresdebeaute;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class CentresdebeauteController extends AbstractDashboardController
{
    /**
     * @Route("/centre", name="centre")
     */
    public function index(): Response
    {
        return $this->render('centresdebeaute/interface.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ClubBeaute');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home' );
        yield MenuItem::linkToCrud('centresdebeaute', 'fas fa-list', Centresdebeaute::class);
        yield MenuItem::linkToCrud('sousservice', 'fas fa-list', Sousservice::class);
        yield MenuItem::linkToCrud('services', 'fas fa-list', Services::class);
    
    }
}
