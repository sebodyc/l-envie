<?php

namespace App\DataFixtures;

use App\Entity\Dessert;
use App\Entity\Entree;
use App\Entity\Menu;
use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**
         * creation du menu
         */
        $menu= new Menu();
        $menu->setDescription("menu de la rentree");
        $manager->persist($menu);

        /**
         * creation de l'entree
         */
     $entree = new Entree();
     $entree->setDescription("mon entree trop bonne")
         ->setPrice(15)
         ->setTitle("oso buco")
         ->setMenu($menu);
     $manager->persist($entree);

        /**
         * creation du plat
         */

     $plat= new Plat();
     $plat->setTitle("entrecote")
         ->setDescription("entrcote de boeuf angus")
         ->setPrice(18)
         ->setMenu($menu);

     $manager->persist($plat);

        /**
         * creation du dessert
         */
     $dessert = new Dessert();
     $dessert->setTitle("mousse au chocolat")
         ->setDescription("mousse au chocolat noir de birmanie ")
         ->setPrice(5)
         ->setMenu($menu);
     $manager->persist($dessert);

        $manager->flush();
    }
}
