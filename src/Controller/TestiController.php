<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestiController extends AbstractController
{
    /**
     * @Route("/testit/testi1")
     */
    public function testi1(){
        return new Response("<h3>Testi</h3><p>Tämä on testi</p><p>Gittiin lisätty alihaara1</p>");
    }
}