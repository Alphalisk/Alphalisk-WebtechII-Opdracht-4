<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GeslotenBibliotheekController extends AbstractController
{
    #[Route('/gesloten/bibliotheek', name: 'app_gesloten_bibliotheek')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('gesloten_bibliotheek/index.html.twig', [
            'controller_name' => 'GeslotenBibliotheekController',
        ]);
    }
}
