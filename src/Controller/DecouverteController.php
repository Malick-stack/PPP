<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecouverteController extends AbstractController
{
    /**
     * @Route("/decouverte", name="decouverte")
     */
    public function index(): Response
    {
        return $this->render('home/Découverte.html.twig', [
            'controller_name' => 'DecouverteController',
        ]);
    }
}
