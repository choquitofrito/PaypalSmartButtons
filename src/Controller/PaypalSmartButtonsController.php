<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;




// return URL : l'url en production de l'app


class PaypalSmartButtonsController extends AbstractController
{
    /**
     * @Route("/paypal/smart/buttons/paiement")
     */
    public function paiement()
    {
        return $this->render('paypal_smart_buttons/paiement.html.twig');
    }
}
