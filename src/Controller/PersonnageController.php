<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    #[Route('/', name: 'app_personnage')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    #[Route('/persos', name: 'app_persos')]
    public function persos(): Response
    {
        return $this->render('personnage/persos.html.twig');
    }
}
