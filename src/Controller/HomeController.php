<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("", name="home")
     */
    public function index()
    {
        if ($this->getUser())
        {
          return $this->render('home/user.html.twig', [
              'controller_name' => 'HomeController',
          ]);
        }
        else
        {
          return $this->render('home/index.html.twig', [
              'controller_name' => 'HomeController',
          ]);
        }
    }
}
