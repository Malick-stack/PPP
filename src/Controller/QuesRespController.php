<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuesRespController extends AbstractController
{
    /**
     * @Route("/ques/resp", name="ques_resp")
     */
    public function index(): Response
    {
        return $this->render('home/questions.html.twig', [
            'controller_name' => 'QuesRespController',
        ]);
    }
}
