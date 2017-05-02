<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelAdvisorBundle:Page:index.html.twig');
    }

    public function voyageAction()
    {
        return $this->render('TravelAdvisorBundle:Page:voyage.html.twig');
    }

    public function voyagePAction()
    {
        return $this->render('TravelAdvisorBundle:Page:voyageP.html.twig');
    }
}

