<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelAdvisorBundle:Admin:index.html.twig');
    }

}

