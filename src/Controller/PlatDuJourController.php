<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlatDuJourController extends AbstractController
{
    /**
     * @Route("/plat/du/jour", name="plat_du_jour")
     */
    public function index()
    {
        return $this->render('plat_du_jour/index.html.twig', [
            'controller_name' => 'PlatDuJourController',
        ]);
    }
}
