<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MalesController extends AbstractController
{
    /**
     * @Route("/males", name="males")
     */
    public function index(): Response
    {
        return $this->render('home/males.html.twig', [
            'controller_name' => 'MalesController',
        ]);
    }
}
