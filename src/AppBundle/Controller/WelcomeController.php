<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    /**
     * @Route("/welcome")
     */
    public function welcomeAction()
    {
        return $this->render('welcome/welcome.html.twig');
    }
}