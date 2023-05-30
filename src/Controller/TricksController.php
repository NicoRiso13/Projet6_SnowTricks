<?php

namespace App\Controller;

use App\DTO\CommentaryDto;
use App\DTO\MediaPictureDto;
use App\DTO\MediaVideoDto;
use App\DTO\TricksDto;
use App\DTO\TricksModifyDto;
use App\Entity\Commentary;
use App\Entity\Media;
use App\Entity\Trick;
use App\Entity\User;
use App\Form\AddVideoFormType;
use App\Form\CommentaryType;
use App\Form\AddPictureFormType;
use App\Form\TricksFormType;
use App\Form\TricksModifyFormType;
use App\Repository\CommentaryRepository;
use App\Repository\MediasRepository;
use App\Repository\TricksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Monolog\DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/tricks")
 */
class TricksController extends AbstractController
{
    /**
     * @Route("/", name="app_trick_index", methods={"GET"})
     */
    public function index(TricksRepository $tricksRepository): Response
    {
        return $this->render('tricks/index.html.twig', [
            'tricks' => $tricksRepository->findBy(array(), array('createdAt' => 'DESC')),
        ]);
    }


    /**
     * @Route("/new", name="app_trick_new", methods={"GET","POST"})
     */
    public function new(Request $request, TricksRepository $tricksRepository, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');


        $form = $this->createForm(TricksFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var TricksDto $dto */
            $dto = $form->getData();
            /** @var User $user */
            $user = $this->getUser();
            $newFilename = null;
            if ($dto->imageFile) {
                $originalFilename = pathinfo($dto->imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $dto->imageFile->guessExtension();
                try {
                    $dto->imageFile->move(
                        $this->getParameter('posters_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }
            }
            $trick = new Trick(null, $user, $dto->name, $dto->description, $dto->categorie);
            $trick->setPoster($newFilename);
            $tricksRepository->add($trick, true);
            $trickName = $trick->getName();

            $this->addFlash('success', "La figure $trickName a été ajoutée avec succès !");


            return $this->redirectToRoute('app_trick_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tricks/new.html.twig', [
            'form' => $form,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="app_trick_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Trick $trick, TricksRepository $tricksRepository, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $trickDto = new TricksModifyDto();
        $trickDto->name = $trick->getName();
        $trickDto->description = $trick->getDescription();
        $trickDto->categorie = $trick->getCategorie();
        $form = $this->createForm(TricksModifyFormType::class, $trickDto);
        $form->handleRequest($request);
        $modifiedAt = new DateTimeImmutable('now');

        if ($form->isSubmitted() && $form->isValid()) {

            if ($trickDto->imageFile) {
                $originalFilename = pathinfo($trickDto->imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $trickDto->imageFile->guessExtension();
                try {
                    $trickDto->imageFile->move(
                        $this->getParameter('posters_directory'),
                        $newFilename,
                    );
                } catch (FileException $e) {

                }
                $trick->setPoster($newFilename);
            }
            $trick->setName($trickDto->name);
            $trick->setDescription($trickDto->description);
            $trick->setCategorie($trickDto->categorie);
            $trick->setModifiedAt($modifiedAt);
            $trickName = $trick->getName();
            $tricksRepository->add($trick, true);
            $this->addFlash('success', "La figure  '$trickName' a été mise a jour avec succès !");
            return $this->redirectToRoute('app_trick_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tricks/edit.html.twig', [
            'trick' => $trick,
            'form' => $form,
        ]);

    }

    /**
     * @Route("/{id}", name="app_trick_show", methods={"GET","POST"})
     */
    public function show(Trick $trick, Request $request, CommentaryRepository $commentaryRepository, SluggerInterface $slugger, MediasRepository $mediasRepository): Response
    {
        $media = $trick->getMedias();
        $user = $this->getUser();
        $form = $this->createForm(CommentaryType::class);
        $form->handleRequest($request);
        $pictureForm = $this->createForm(AddPictureFormType::class);
        $pictureForm->handleRequest($request);
        $videoForm = $this->createForm(AddVideoFormType::class);
        $videoForm->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
            if (!$user instanceof User) {
                throw new BadRequestException();
            }
            /** @var CommentaryDto $data */
            $data = $form->getData();
            $commentary = new Commentary($user, $trick, $data->comment);
            $commentaryRepository->add($commentary, true);
            $this->addFlash('success', 'Le commentaire a été ajouté avec succès !');
            return $this->redirectToRoute('app_trick_show', ['id' => $trick->getId()]);

        } elseif ($pictureForm->isSubmitted() && $pictureForm->isValid()) {

            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
            if (!$user instanceof User) {
                throw new BadRequestException();
            }

            /** @var MediaPictureDto $pictureDto */
            $pictureDto = $pictureForm->getData();
            $newFilename = null;
            if ($pictureDto->imageFile) {
                $originalFilename = pathinfo($pictureDto->imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pictureDto->imageFile->guessExtension();
                try {
                    $pictureDto->imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }

            }
            $media = new Media($trick, $newFilename, null);
            $mediasRepository->add($media, true);
            $this->addFlash('success', 'La miniature a été ajouté avec succès !');
            return $this->redirectToRoute('app_trick_show', ['id' => $trick->getId()]);

        } elseif ($videoForm->isSubmitted() && $videoForm->isValid()) {
            /** @var MediaVideoDto $data */
            $data = $videoForm->getData();
            if(preg_match('/^https:\/\/youtu\.be\/(.+)/', $data->link,$matches)){
                $result = $matches[1];
                $media = new Media($trick, null, $result);
            }
            $mediasRepository->add($media, true);
            $this->addFlash('success', 'La vidéo a été ajouté avec succès !');

            return $this->redirectToRoute('app_trick_show', ['id' => $trick->getId()]);
        }

        return $this->render('tricks/show.html.twig', [
            'user' => $user,
            'trick' => $trick,
            'media' => $media,
            'formCommentary' => $form->createView(),
            'pictureForm' => $pictureForm->createView(),
            'videoForm' => $videoForm->createView(),


        ]);
    }


    /**
     * @Route("/{id}/delete", name="app_trick_delete", methods={"GET","POST"})
     */
    public
    function delete(Trick $trick, TricksRepository $tricksRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $tricksRepository->remove($trick, true);
        $this->addFlash('success', 'La figure a été supprimée avec succès !');
        return $this->redirectToRoute('app_trick_index', [], Response::HTTP_SEE_OTHER);
    }



}
