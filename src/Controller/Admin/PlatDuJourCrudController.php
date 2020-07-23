<?php

namespace App\Controller\Admin;

use App\Entity\PlatDuJour;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PlatDuJourCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PlatDuJour::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
