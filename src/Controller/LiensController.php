<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LiensController extends AbstractController
{
    /**
     * @Route("/liens", name="liens")
     */
    public function index(): Response
    {
        return $this->render('home/Liens.html.twig', [
            'controller_name' => 'LiensController',
        ]);
    }
}
