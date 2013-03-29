<?php

namespace Buho\MylinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Buho\MylinksBundle\Entity\Comment;
use Buho\MylinksBundle\Form\CommentType;

class CommentController extends Controller
{
    
    public function newAction($link_id)
    {
        $link = $this->getLink($link_id);
        
        $comment = new Comment();
        $comment->setLink($link);
        $form = $this->createForm(new CommentType(), $comment);
        
        return $this->render('BuhoMylinksBundle:Comment:form.html.twig', array(
           'comment'    =>    $comment,
           'form'       =>    $form->createView(),     
        ));
    }
    
    public function createAction($link_id)
    {
        $link = $this->getLink($link_id);
        
        $comment = new Comment();
        $comment->setLink($link);
        $request = $this->getRequest();
        $form = $this->createForm(new CommentType(), $comment);
        $form->bind($request);
        
        if ($form->isValid()) {
            // TODO: persist comment
            
            return $this->redirect($this->generateUrl('buho_mylinks_link_show', array(
                'id'        =>    $comment->getLink()->getId())) . 
                '#comment-' . $comment->getId()
            );
        }
        
        return $this->render('BuhoMylinksBundle:Comment:create.html.twig', array(
            'comment'    =>    $comment,
            'form'       =>    $form->createView(),        
        ));
    }
    
    protected function getLink($link_id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $link = $em->getRepository('BuhoMylinksBundle:Link')
                   ->find($link_id);
        
        if (!$link) {
            throw $this->createNotFoundException('Unable to find link.');
        }
        
        return $link;
    }
}