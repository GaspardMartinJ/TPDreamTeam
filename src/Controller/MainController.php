<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/brand/new", name="brand_new")
     */
    public function index(): Response
    {
        return $this->render('brand_new/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
