<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WarréController extends AbstractController
{
    /**
     * @Route("/warr/", name="warr_")
     */
    public function index(): Response
    {
        return $this->render('warré/index.html.twig', [
            'controller_name' => 'WarréController',
        ]);
    }
}
