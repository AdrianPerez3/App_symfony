<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(): Response
    {
        $users = ["Adrian", "Roberto", "Fernando"];

        return $this->render('default/index.html.twig', [
            'users' => $users,
        ]);
    }
}