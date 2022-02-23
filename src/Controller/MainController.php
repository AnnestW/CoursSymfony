<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="about")
     */
    public function about(): Response
    {


        return $this->render('main/about.html.twig', [

            'title' => "About us"
        ]);
    }

    /**
     * @Route("/list/", name="list")
     */
    public function myList(): Response
    {
        $firewalk = 'img/firewalk.jpg';
        $nails =  'img/nails.jpg';
        $shark = 'img/shark.jpg';

        $bucket = [
            0 => ["chose" => "Marcher sur du feu", "img" => $firewalk],
            1 => ["chose" => "Nager avec des requins", "img" => $shark],
            2 => ["chose" => "Dormir sur un lit de clous", "img" => $nails],

        ];
        return $this->render('main/list.html.twig', [
            'bucket' => $bucket,
            'title' => "List!"
        ]);

    }

    /**
     * @Route("/details/", name="details")
     */
    public function details(): Response
    {


        return $this->render('main/details.html.twig', [

            'title' => "Details"
        ]);
    }




    /**
     * @Route("/autographe/", name="autographe")
     */
    public function autographe(): Response
    {

        return $this->render('main/autographe.html.twig');
    }
}
