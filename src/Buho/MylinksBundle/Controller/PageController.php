<?php

namespace Buho\MylinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Buho\MylinksBundle\Entity\Enquiry;
use Buho\MylinksBundle\Form\EnquiryType;

class PageController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BuhoMylinksBundle:Page:index.html.twig');
    }
    
    public function aboutAction() 
    {
        return $this->render('BuhoMylinksBundle:Page:about.html.twig');
    }
    
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            
            if ($form->isValid()) {
                
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact from MyLinks')
                    ->setFrom('somemail@mail.com')
                    ->setTo($this->container->getParameter('buho_mylinks.emails.contact_email'))
                    ->setBody($this->renderView('BuhoMylinksBundle:Page:contactEmail.txt.twig', array(
                            'enquiry'    =>    $enquiry
                    )));
                $this->get('mailer')->send($message);
                
                $this->get('session')->setFlash('success', 'Your contact enquiry was sent. Thank you!');
                
                
                return $this->redirect($this->generateUrl('buho_mylinks_contact'));
            }
        }
        
        return $this->render('BuhoMylinksBundle:Page:contact.html.twig', array(
            'form'    =>    $form->createView(),
        ));
    }
}