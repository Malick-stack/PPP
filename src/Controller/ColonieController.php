<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColonieController extends AbstractController
{
    /**
     * @Route("/colonie", name="colonie")
     */
    public function index(): Response
    {
        return $this->render('home/colonie.html.twig', [
            'controller_name' => 'ColonieController',
        ]);
    }
}
