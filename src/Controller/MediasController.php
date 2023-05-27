<?php

namespace App\Controller;

use App\DTO\MediaPictureDto;
use App\DTO\MediaVideoDto;
use App\Entity\Media;
use App\Form\addPictureFormType;
use App\Form\addVideoFormType;
use App\Repository\MediasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/medias")
 */
class MediasController extends AbstractController
{


    /**
     * @Route("/{id}/edit_picture", name="app_medias_edit_picture", methods={"GET", "POST"})
     */
    public function editPicture(Request $request, Media $media, MediasRepository $mediasRepository, SluggerInterface $slugger): Response
    {
        $user = $request->getSession()->getId();
        if ($user === null) {
            return $this->renderForm('bundles/TwigBundle/Exception/error404.html.twig');
        }

        $mediaPictureDto = new MediaPictureDto();

        $form = $this->createForm(addPictureFormType::class, $mediaPictureDto);
        $form->handleRequest($request);
        $trick = $media->getTrick();

        if ($form->isSubmitted() && $form->isValid()) {

            if ($mediaPictureDto->imageFile) {
                $originalFilename = pathinfo($mediaPictureDto->imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $mediaPictureDto->imageFile->guessExtension();
                try {
                    $mediaPictureDto->imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename,
                    );
                } catch (FileException $e) {

                }
                $media->setPictures($newFilename);
            }
            $mediasRepository->add($media, true);
            $this->addFlash('success', "Le média a été mise a jour avec succès !");
            return $this->redirectToRoute('app_trick_show', ['id' => $trick->getId()]);


        }

        return $this->renderForm('medias/edit.html.twig', [
            'medias' => $media,
//            'videoForm' => $videoForm,
        ]);
    }


    /**
     * @Route("/{id}/edit_video", name="app_medias_edit_video", methods={"GET", "POST"})
     */
    public function editVideo(Request $request, Media $media, MediasRepository $mediasRepository, SluggerInterface $slugger): Response
    {
        $user = $request->getSession()->getId();
        if ($user === null) {
            return $this->renderForm('bundles/TwigBundle/Exception/error404.html.twig');
        }

        $mediaVideoDto = new MediaVideoDto();

        $videoForm = $this->createForm(addVideoFormType::class, $mediaVideoDto);
        $videoForm->handleRequest($request);
        $trick = $media->getTrick();

        if ($videoForm->isSubmitted() && $videoForm->isValid()) {
            /** @var MediaVideoDto $data */
            $data = $videoForm->getData();
            $media = new Media($trick,null,$data->link);
            $mediasRepository->add($media, true);
            $this->addFlash('success', "Le média a été mise a jour avec succès !");
            return $this->redirectToRoute('app_trick_show', ['id' => $trick->getId()]);


        }

        return $this->renderForm('medias/edit.html.twig', [
            'medias' => $media,
            'videoForm' => $videoForm,
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
     * @Route("/{id}/delete", name="app_medias_delete", methods={"GET","POST"})
     */
    public function delete(Request $request, Media $media, MediasRepository $mediasRepository): Response
    {
        $user = $request->getSession()->getId();
        if ($user === null) {
            return $this->renderForm('bundles/TwigBundle/Exception/error404.html.twig');
        }
        $mediasRepository->remove($media, true);

        $trick = $media->getTrick();
        $this->addFlash('success', 'Le média a été supprimée avec succès !');
        return $this->redirectToRoute('app_trick_show', ['id' => $trick->getId()]);
    }
}
