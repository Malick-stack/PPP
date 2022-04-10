<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiculteurController extends AbstractController
{
    /**
     * @Route("/apiculteur", name="apiculteur")
     */
    public function index(): Response
    {
        return $this->render('home/Apiculteur.html.twig', [
            'controller_name' => 'ApiculteurController',
        ]);
    }
}
