<?php

namespace Buho\MylinksBundle\Controller;

use Buho\MylinksBundle\Entity\Link;
use Buho\MylinksBundle\Form\LinkType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LinkController extends Controller
{
    public function newAction()
    {
        $link = new Link();
        $link->setUser($this->getUser());
        $form = $this->createForm(new LinkType(), $link);
    
        return $this->render('BuhoMylinksBundle:Link:form.html.twig', array(
                'link'    =>    $link,
                'form'       =>    $form->createView(),
        ));
    }
    
    public function createAction($user_id)
    {
        $user = $this->getUser($user_id);
    
        $link = new Link();
        $link->setUser($user);
        $request = $this->getRequest();
        $form = $this->createForm(new LinkType(), $link);
        $form->bind($request);
    
        if ($form->isValid()) {
            // TODO: persist comment
            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();
    
            return $this->redirect($this->generateUrl('buho_mylinks_link_show', array(
                    'id'        =>    $link->getId()))
            );
        }
    
        return $this->render('BuhoMylinksBundle:Link:create.html.twig', array(
                'link'    =>    $link,
                'form'       =>    $form->createView(),
        ));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $link = $em->getRepository('BuhoMylinksBundle:Link')->find($id);
        
        if (!$link) {
            throw $this->createNotFoundException('Unable to find link');
        }
        
        $comments = $em->getRepository('BuhoMylinksBundle:Comment')
                       ->getCommentsForLink($link->getId());
        
        return $this->render('BuhoMylinksBundle:Link:show.html.twig', array(
            'link'        =>    $link,
            'comments'    =>    $comments,
        ));
    }
}