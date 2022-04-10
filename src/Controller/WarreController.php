<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WarreController extends AbstractController
{
    /**
     * @Route("/warre", name="warre")
     */
    public function index(): Response
    {
        return $this->render('home/Warre.html.twig', [
            'controller_name' => 'WarreController',
        ]);
    }
}
