<?php

namespace App\Controller;

use App\Entity\Media;
use App\Form\MediasType;
use App\Repository\MediasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/medias")
 */
class MediasController extends AbstractController
{

    /**
     * @Route("/new", name="app_medias_new", methods={"GET", "POST"})
     */
    public function new(Request $request, MediasRepository $mediasRepository): Response
    {
        $user = $request->getSession()->getId();
        if ($user === null) {
            return $this->renderForm('bundles/TwigBundle/Exception/error404.html.twig');
        }

        $media = new Media();
        $form = $this->createForm(MediasType::class, $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mediasRepository->add($media, true);

            return $this->redirectToRoute('app_medias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medias/new.html.twig', [
            'media' => $media,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_medias_show", methods={"GET"})
     */
    public function show(Media $media): Response
    {
        return $this->render('medias/show.html.twig', [
            'media' => $media,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_medias_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Media $media, MediasRepository $mediasRepository): Response
    {
        $user = $request->getSession()->getId();
        if ($user === null) {
            return $this->renderForm('bundles/TwigBundle/Exception/error404.html.twig');
        }

        $form = $this->createForm(MediasType::class, $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mediasRepository->add($media, true);

            return $this->redirectToRoute('app_medias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medias/edit.html.twig', [
            'media' => $media,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_medias_delete", methods={"POST"})
     */
    public function delete(Request $request, Media $media, MediasRepository $mediasRepository): Response
    {
        $user = $request->getSession()->getId();
        if ($user === null) {
            return $this->renderForm('bundles/TwigBundle/Exception/error404.html.twig');
        }

            $mediasRepository->remove($media, true);

        return $this->redirectToRoute('app_medias_index', [], Response::HTTP_SEE_OTHER);
    }
}
