<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RuchesController extends AbstractController
{
    /**
     * @Route("/ruches", name="ruches")
     */
    public function index(): Response
    {
        return $this->render('home/ruches.html.twig', [
            'controller_name' => 'RuchesController',
        ]);
    }
}
