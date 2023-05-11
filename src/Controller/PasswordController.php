<?php

namespace App\Controller;
use App\DTO\ForgetPasswordDto;
use App\Form\ForgetPasswordFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/password")
 */
class PasswordController extends AbstractController
{
    /**
     * @Route("/forget_password", name="app_forget_password", methods={"GET","POST"})
     */
    public function forgetPassword(Request $request): Response
    {
        $forgetPasswordDto = new ForgetPasswordDto();
        $form = $this->createForm(ForgetPasswordFormType::class, $forgetPasswordDto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('app_forget_password', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('password/forgetPassword.html.twig', [
            'form' => $form,
        ]);

    }

}
