<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    // option a) cette action affiche une vue contenant un bouton Paypal
    /**
     * @Route("/paiement/form")
     */
    public function paiementForm()
    {
        return $this->render('accueil/paiement_form.html.twig');
    }

    // option b) cette action affiche une vue contenant un lien vers une action qui realisera le paiement 
    // par Paypal, pas de formulaire ni bouton Paypal

    /**
     * @Route("/paiement/lien")
     */
    public function paiementLien()
    {
        return $this->render('accueil/paiement_lien.html.twig');
    }

}
