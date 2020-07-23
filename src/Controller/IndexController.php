<?php

namespace App\Controller;

use App\Repository\PlatDuJourRepository;
use App\Repository\SuggestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param PlatDuJourRepository $platDuJourRepository
     * @param SuggestionRepository $suggestionRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PlatDuJourRepository $platDuJourRepository,SuggestionRepository $suggestionRepository)
    {
        $platsDuJour= $platDuJourRepository->findAll();
        $suggestion= $suggestionRepository->findAll();
        return $this->render('index/index.html.twig', [
            'platDuJour' => $platsDuJour,
            'suggestion' => $suggestion,
        ]);
    }

    public function setSuggestion(PlatDuJourRepository $platDuJourRepository,SuggestionRepository $suggestionRepository){
        $platsDuJour= $platDuJourRepository->findAll();
        $suggestion= $suggestionRepository->findAll();
        return $this->render('content.html.twig', [
            'platDuJour' => $platsDuJour,
            'suggestion' => $suggestion,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */

    public function contact(){

        return $this->render('contact.html.twig');
    }
}
