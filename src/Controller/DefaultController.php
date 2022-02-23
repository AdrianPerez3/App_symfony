<?php

namespace App\Controller;

use App\Entity\User;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(): Response
    {
        // $users = ["Adrian", "Roberto", "Fernando"];

        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setName("Adrian");
        $user->setName("Roberto");
        $user->setName("Jose Luis");

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->render('default/index.html.twig', [
            'users' => $users,
        ]);
    }
}
