<?php

namespace App\Controller;

use App\DTO\ForgetPasswordDto;
use App\DTO\ResetPasswordDto;
use App\DTO\UserDto;
use App\Entity\User;
use App\Form\ForgetPasswordFormType;
use App\Form\ResetPasswordFormType;
use App\Form\UserModifyFormType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/{id}/account", name="app_user_show", methods={"GET","POST"})
     */
    public function show(User $user): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        return $this->render('user/account.html.twig', [
            'id' => $user->getId(),
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit_account", name="app_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userRepository, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        $userDto = new UserDto();
        $userDto->firstname = $user->getFirstname();
        $userDto->name = $user->getName();
        $userDto->email = $user->getEmail();
        $form = $this->createForm(UserModifyFormType::class, $userDto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $picture */
            if ($userDto->picture) {
                $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $picture->guessExtension();
                try {
                    $picture->move(
                        $this->getParameter('userPicture_directory'),
                        $newFilename,
                    );
                } catch (FileException $e) {

                }
            }
            $user->setFirstname($userDto->firstname);
            $user->setName($userDto->name);
            $user->setEmail($userDto->email);
            $userRepository->add($user, true);

            $this->addFlash('success', 'Le compte a été mis à jour avec succès !');
            return $this->redirectToRoute('app_user_show', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
        }
        return $this->renderform('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/reset", name="app_user_reset_password", methods={"GET","POST"})
     */
    public function resetPassword(User $user, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $resetPasswordDto = new ResetPasswordDto();
        $form = $this->createForm(ResetPasswordFormType::class, $resetPasswordDto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('app_user_reset_password', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderform('user/resetPassword.html.twig', [
            'form' => $form,
            'id' => $user->getId(),
            'user' => $user,
        ]);
    }





    }
