<?php

namespace App\Controller;

use App\Repository\DessertRepository;
use App\Repository\EntreeRepository;
use App\Repository\MenuRepository;
use App\Repository\PlatRepository;
use App\Repository\VinsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="menu")
     * @param PlatRepository $platRepository
     * @param EntreeRepository $entreeRepository
     * @param DessertRepository $dessertRepository
     * @param VinsRepository $vinsRepository
     * @return Response
     */
    public function menu(PlatRepository $platRepository , EntreeRepository $entreeRepository,DessertRepository $dessertRepository,VinsRepository $vinsRepository)
    {
        $entrees=$entreeRepository->findAll();
        $plats=$platRepository->findAll();
        $dessert=$dessertRepository->findAll();
        $vins=$vinsRepository->findAll();


        return $this->render('menu/index.html.twig', [
            'plats' => $plats,
            'entrees'=>$entrees,
            'desserts'=>$dessert,
            'vins'=>$vins,
        ]);
    }
}
