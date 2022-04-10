<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnnemiesController extends AbstractController
{
    /**
     * @Route("/ennemie", name="ennemies")
     */
    public function index(): Response
    {
        return $this->render('home/Ennemis.html.twig', [
            'controller_name' => 'EnnemiesController',
        ]);
    }
}
