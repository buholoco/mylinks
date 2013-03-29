<?php

namespace Buho\MylinksBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Buho\MylinksBundle\Entity\Link;

class LinkFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $link1 = new Link();
        $link1->setDescription('Symblog Tutorial');
        $link1->setUri('http://tutorial.symblog.co.uk/');
        $link1->setTags('symfony2, php, paradise, symblog');
        $link1->setCreated(new \DateTime());
        $link1->setUpdated($link1->getCreated());
        $manager->persist($link1);
        
        $link2 = new Link();
        $link2->setDescription('Symfony framework Web');
        $link2->setUri('http://symfony.com/');
        $link2->setTags('symfony2, php');
        $link2->setCreated(new \DateTime());
        $link2->setUpdated($link2->getCreated());
        $manager->persist($link2);
        
        $link3 = new Link();
        $link3->setDescription('Php oficial web');
        $link3->setUri('http://php.net/');
        $link3->setTags('php');
        $link3->setCreated(new \DateTime());
        $link3->setUpdated($link3->getCreated());
        $manager->persist($link3);
        
        $manager->flush();
    }
}