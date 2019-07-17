<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends AbstractController
{

    /**
     * @Route("/", name="home_page")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home_page()
    {
        return $this->render("home-page.html.twig");
    }

}