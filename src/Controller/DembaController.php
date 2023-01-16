<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DembaController extends AbstractController
{
    #[Route('/demba', name: 'app_demba')]
    public function index(): Response
    {
        return $this->render('demba/index.html.twig', [
            'controller_name' => 'DembaController',
        ]);
    }

    #[Route('/demba', name: 'app_page1')]
    public function index(): Response
    {
        return $this->render('demba/page1.html.twig', [
            'controller_name' => 'DembaController',
        ]);
    }
}
