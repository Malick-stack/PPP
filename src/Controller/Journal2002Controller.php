<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Journal2002Controller extends AbstractController
{
    /**
     * @Route("/journal2002", name="journal2002")
     */
    public function index(): Response
    {
        return $this->render('home/journal2002.html.twig', [
            'controller_name' => 'Journal2002Controller',
        ]);
    }
}
