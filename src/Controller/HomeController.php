<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**
     * Page d'accueil
     *
     * @Route("/", name="accueil")
     */
    public function home(): Response
    {
        return $this->render('Main/home.html.twig');
    }

}
