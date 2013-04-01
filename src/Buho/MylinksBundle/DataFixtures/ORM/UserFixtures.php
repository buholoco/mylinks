<?php

namespace Buho\MylinksBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Buho\MylinksBundle\Entity\User;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('admin');
        $user1->setPlainPassword('password');
        $user1->setEmail('admin@mylinks.com');
        $user1->setEnabled(true);
        $user1->setSuperAdmin(true);
       
        $manager->persist($user1);
        
        $user2 = new User();
        $user2->setUsername('user');
        $user2->setPlainPassword('password');
        $user2->setEmail('user@mylinks.com');
        $user2->setEnabled(true);
        $user2->setSuperAdmin(false);
        $manager->persist($user2);
        
        $manager->flush();
        
        $this->addReference('user-1', $user1);
        $this->addReference('user-2', $user2);
    }
    
    public function getOrder()
    {
        return 1;
    }
}