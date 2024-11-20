<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InvestigationController extends AbstractController
{
    #[Route('/investigation', name: 'app_investigation')]
    public function index(): Response
    {
        return $this->render('investigation/index.html.twig', [
            'controller_name' => 'InvestigationController',
        ]);
    }
}
