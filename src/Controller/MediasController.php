<?php

namespace App\Controller;

use App\DTO\MediaPictureDto;
use App\DTO\MediaVideoDto;
use App\Entity\Media;
use App\Entity\User;
use App\Form\AddPictureFormType;
use App\Form\AddVideoFormType;
use App\Repository\MediasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
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
        $user = $this->getUser();
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        if (!$user instanceof User) {
            throw new BadRequestException();
        }

        $mediaPictureDto = new MediaPictureDto();

        $pictureForm = $this->createForm(AddPictureFormType::class, $mediaPictureDto);
        $pictureForm->handleRequest($request);
        $trick = $media->getTrick();

        if ($pictureForm->isSubmitted() && $pictureForm->isValid()) {

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

        return $this->renderForm('medias/editPicture.html.twig', [
            'medias' => $media,
            'trick' =>$trick,
            'pictureForm' => $pictureForm,
        ]);
    }


    /**
     * @Route("/{id}/edit_video", name="app_medias_edit_video", methods={"GET", "POST"})
     */
    public function editVideo(Request $request, Media $media, MediasRepository $mediasRepository, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        if (!$user instanceof User) {
            throw new BadRequestException();
        }

        $mediaVideoDto = new MediaVideoDto();

        $videoForm = $this->createForm(AddVideoFormType::class, $mediaVideoDto);
        $videoForm->handleRequest($request);
        $trick = $media->getTrick();

        if ($videoForm->isSubmitted() && $videoForm->isValid()) {
            /** @var MediaVideoDto $data */
            $data = $videoForm->getData();
            if(preg_match('/^https:\/\/youtu\.be\/(.+)/', $data->link,$matches)){
                $result = $matches[1];
                $media->setVideos($result);
            }
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
