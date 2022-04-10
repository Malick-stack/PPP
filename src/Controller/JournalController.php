<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JournalController extends AbstractController
{
    /**
     * @Route("/journal2", name="journal")
     */
    public function index(): Response
    {
        return $this->render('home/journal1.html.twig', [
            'controller_name' => 'JournalController',
        ]);
    }
}
