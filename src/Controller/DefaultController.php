<?php

namespace App\Controller;

use App\Entity\User;


use App\Entity\Video;
use Doctrine\Persistence\ManagerRegistry;
use http\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route('/home', name: 'home')]
    public function index(ManagerRegistry $doctrine, Request $resquest): Response
    {

        $entityManager = $doctrine->getManager();

//        $user = new User();
//
//        $user->setName("JoseBatiana");

//        $video = new Video();

//        for ($i = 1; $i <= 3; $i++){
//            $video->setTitle('Video Title' . $i);
//            $user->addVideo($video);
//            $entityManager->persist($video);
//        }
//
//        $entityManager->persist($user);
//        $entityManager->flush();

        $video = $doctrine->getRepository(Video::class)->find(1);

//        dump($video->getUser()->getName());


//        $users = $doctrine->getRepository(User::class)->findAll();
//
//


        return $this->render('default/index.html.twig', [
        ]);
    }

}
