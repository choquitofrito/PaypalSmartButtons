<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecuriteController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    // la route "logout" sera utilisé par security.yaml
    // le name "logout" será utilisé dans le path de la vue (le lien de logout)
    // le code de cette action ne se lancera jamais

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        // ce code ne se lance jamais, cette action peut être vide
    }


    // target: la route à lancer APRÈS le logout 

    /**
     * @Route("/apres/logout")
     */
    public function apresLogout()
    {
        return new Response("Hasta la vista, baby");
    }
}
