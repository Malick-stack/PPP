<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReineController extends AbstractController
{
    /**
     * @Route("/reine", name="reine")
     */
    public function index(): Response
    {
        return $this->render('home/reine.html.twig', [
            'controller_name' => 'ReineController',
        ]);
    }
}
