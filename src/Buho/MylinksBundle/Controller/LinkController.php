<?php

namespace Buho\MylinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LinkController extends Controller
{
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $link = $em->getRepository('BuhoMylinksBundle:Link')->find($id);
        
        if (!$link) {
            throw $this->createNotFoundException('Unable to find link');
        }
        
        return $this->render('BuhoMylinksBundle:Link:show.html.twig', array(
            'link'    =>    $link,     
        ));
    }
}