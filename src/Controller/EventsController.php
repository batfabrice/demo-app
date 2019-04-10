<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="events")
     * @return Response
     */
    public function index(): Response
    {
        $events = [
            'Symfony conference',
            'Laravel conference',
            'JavaFx conference',
            'PHP conference'
        ];

        return $this->render('events/index.html.twig', compact('events'));
    }
}
