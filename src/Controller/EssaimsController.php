<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EssaimsController extends AbstractController
{
    /**
     * @Route("/essaims", name="essaims")
     */
    public function index(): Response
    {
        return $this->render('home/Essaims.html.twig', [
            'controller_name' => 'EssaimsController',
        ]);
    }
}
