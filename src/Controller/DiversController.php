<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiversController extends AbstractController
{
    /**
     * @Route("/divers", name="divers")
     */
    public function index(): Response
    {
        return $this->render('home/divers.html.twig', [
            'controller_name' => 'DiversController',
        ]);
    }
}
