<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Services;
use App\Entity\Publicite;
use App\Entity\Commentaire;
use App\Entity\Centresdebeaute;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ClubBeaute');
    }
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Publicite', 'fas fa-tags', Publicite::class);
        yield MenuItem::linkToCrud('Commentaire', 'fas fa-comment', Commentaire::class);
        yield MenuItem::linkToCrud('Centresdebeaute', 'fas fa-heartbeat', Centresdebeaute::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-tags', Services::class);
        
        
    }
}
