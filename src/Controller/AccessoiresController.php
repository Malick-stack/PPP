<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessoiresController extends AbstractController
{
    /**
     * @Route("/accessoires", name="accessoires")
     */
    public function index(): Response
    {
        return $this->render('home/accessoires.html.twig', [
            'controller_name' => 'AccessoiresController',
        ]);
    }
}
