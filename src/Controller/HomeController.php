<?php

namespace App\Controller;

use App\Entity\Trick;
use App\Repository\TricksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**
     * Page d'accueil
     *
     * @Route("/", name="accueil", methods={"GET"})
     */
    public function home(TricksRepository $tricksRepository): Response
    {
        return $this->render('Main/home.html.twig', ['tricks'=>$tricksRepository->findAll()]);
    }

}
