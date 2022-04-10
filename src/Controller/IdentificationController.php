<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IdentificationController extends AbstractController
{
    /**
     * @Route("/identification", name="identification")
     */
    public function index(): Response
    {
        return $this->render('home/identifier.html.twig', [
            'controller_name' => 'IdentificationController',
        ]);
    }
}
