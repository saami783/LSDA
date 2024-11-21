<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        if($this->getUser()){
            return $this->redirectToRoute('app_investigation');
        } else {
            return $this->redirectToRoute('app_login');
        }
    }
}
