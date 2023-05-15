<?php

namespace App\Controller;

use App\DTO\ForgetPasswordDto;
use App\Entity\User;
use App\Form\ForgetPasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ForgetPasswordController extends AbstractController
{

    /**
     * @Route("/forget", name="app_forget_password", methods={"GET","POST"})
     */
    public function forgetPassword(Request $request, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(ForgetPasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ForgetPasswordDto $forgetFormDto */
            $forgetFormDto = $form->getData();
            dump($forgetFormDto);
//            if ($entityManager->find(User::class, 'email' == $forgetFormDto)) {
//
//                $to = 'personne@example.com';
//                $subject = 'le sujet';
//                $message = 'Bonjour !';
//                $headers = 'From: webmaster@example.com' . "\r\n" .
//                    'Reply-To: webmaster@example.com' . "\r\n" .
//                    'X-Mailer: PHP/' . phpversion();
//
//                mail($to, $subject, $message, $headers);
//            }

            return $this->render('security/login.html.twig');
        }

        return $this->render('password/forgetPassword.html.twig', [
            'forgetPasswordForm' => $form->createView(),
        ]);
    }


}
