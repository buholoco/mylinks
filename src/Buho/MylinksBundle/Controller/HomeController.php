<?php

namespace Buho\MylinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BuhoMylinksBundle:Home:index.html.twig');
    }
}