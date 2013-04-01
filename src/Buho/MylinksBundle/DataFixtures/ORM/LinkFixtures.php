<?php

namespace Buho\MylinksBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Buho\MylinksBundle\Entity\Link;

class LinkFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $link1 = new Link();
        $link1->setTitle('Symblog Tutorial');
        $link1->setDescription('Symblog Tutorial');
        $link1->setUri('http://tutorial.symblog.co.uk/');
        $link1->setTags('symfony2, php, paradise, symblog');
        $link1->setUser($manager->merge($this->getReference('user-1')));
        $manager->persist($link1);
        
        $link2 = new Link();
        $link2->setTitle('Symfony Framework');
        $link2->setDescription('Symfony framework Web');
        $link2->setUri('http://symfony.com/');
        $link2->setTags('symfony2, php');
        $link2->setUser($manager->merge($this->getReference('user-2')));
        $manager->persist($link2);
        
        $link3 = new Link();
        $link3->setTitle('PHP.net');
        $link3->setDescription('Php oficial web');
        $link3->setUri('http://php.net/');
        $link3->setTags('php');
        $link3->setUser($manager->merge($this->getReference('user-2')));
        $manager->persist($link3);
        
        $manager->flush();
        
        $this->addReference('link-1', $link1);
        $this->addReference('link-2', $link2);
        $this->addReference('link-3', $link3);
    }
    
    public function getOrder()
    {
        return 2;
    }
}