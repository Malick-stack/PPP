<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OuvrieresController extends AbstractController
{
    /**
     * @Route("/ouvrieres", name="ouvrieres")
     */
    public function index(): Response
    {
        return $this->render('home/ouvrieres.html.twig', [
            'controller_name' => 'OuvrieresController',
        ]);
    }
}
