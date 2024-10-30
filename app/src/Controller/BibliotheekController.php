<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BibliotheekController extends AbstractController
{

    #[Route('/bibliotheek', name: 'app_bibliotheek')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('bibliotheek/index.html.twig', [
            'controller_name' => 'BibliotheekController',
        ]);
    }
}
