<?php

namespace App\Controller;

use App\Entity\Commentary;
use App\Entity\Trick;
use App\Form\CommentaryType;
use App\Repository\CommentaryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commentary")
 */
class CommentaryController extends AbstractController
{
    /**
     * @Route("/", name="app_commentary_index", methods={"GET"})
     */
    public function index(CommentaryRepository $commentarysRepository): Response
    {
        return $this->render('commentarys/index.html.twig', [
            'commentarys' => $commentarysRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}", name="app_commentary_show", methods={"GET"})
     */
    public function show(Commentary $commentary): Response
    {
        return $this->render('commentarys/show.html.twig', [
            'commentary' => $commentary,
        ]);
    }

}
