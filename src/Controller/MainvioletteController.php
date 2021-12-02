<?php

namespace App\Controller;

use App\Repository\CalendarvioletteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainvioletteController extends AbstractController
{
    /**
     * @Route("/mainviolette", name="mainviolette")
     */
    public function index(CalendarvioletteRepository $calendarviolette)
    {
        $events = $calendarviolette->findAll();

        $rdvs  = [];

        foreach($events as $event){
           $rdvs[] = [
               'id' => $event->getId(),
               'start' => $event->getStart()->format('Y-m-d H:i:s'),
               'end' => $event->getEnd()->format('y-m-d H:i:s'),
               'titre' => $event->getTitre(),
               'description' => $event->getDescription(),
               'backgroundColor' => $event->getBackgroundColor(),
               'borderColor' => $event->getBorderColor(),
               'textColor' => $event->getTextColor(),
               'allDay' => $event->getAllDay(),
           ];
        }
         $data = json_encode($rdvs);

        return $this->render('mainviolette/index.html.twig', compact('data'));
        
    }
}
