<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="pages.home")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/about", name="pages.about")
     * @return Response
     */
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    /**
     * @Route("/help", name="pages.help")
     * @return Response
     */
    public function help(): Response
    {
        return $this->render('pages/help.html.twig');
    }
}
