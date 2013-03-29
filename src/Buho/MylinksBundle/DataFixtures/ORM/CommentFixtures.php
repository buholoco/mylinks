<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/CommentFixtures.php

namespace Buho\MylinksBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Buho\MylinksBundle\Entity\Comment;
use Buho\MylinksBundle\Entity\Link;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        ////$comment->setUser('symfony');
        $comment->setEmail('test@test.com');
        $comment->setComment('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $comment->setLink($manager->merge($this->getReference('link-1')));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('David');
        $comment->setEmail('test2@test.com');
        $comment->setComment('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!');
        $comment->setLink($manager->merge($this->getReference('link-1')));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Dade');
        $comment->setEmail('test3@test.com');
        $comment->setComment('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Kate');
        $comment->setEmail('test4@test.com');
        $comment->setComment('Are you challenging me? ');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Dade');
        $comment->setEmail('test@test.com');
        $comment->setComment('Name your stakes.');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:18:35"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Kate');
        $comment->setEmail('test@test.com');
        $comment->setComment('If I win, you become my slave.');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:22:53"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Dade');
        $comment->setEmail('test3@test.com');
        $comment->setComment('Your SLAVE?');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:25:15"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Kate');
        $comment->setEmail('test2@test.com');
        $comment->setComment('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:46:08"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Dade');
        $comment->setEmail('test5@test.com');
        $comment->setComment('And if I win?');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 10:22:46"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Kate');
        $comment->setEmail('test3@test.com');
        $comment->setComment('Make it my first-born!');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-23 11:08:08"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Dade');
        $comment->setEmail('test@test.com');
        $comment->setComment('Make it our first-date!');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-24 18:56:01"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Kate');
        $comment->setEmail('test2@test.com');
        $comment->setComment('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $comment->setCreated(new \DateTime("2011-07-25 22:28:42"));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Stanley');
        $comment->setEmail('test6@test.com');
        $comment->setComment('It\'s not gonna end like this.');
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Gabriel');
        $comment->setEmail('test2@test.com');
        $comment->setComment('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Mile');
        $comment->setEmail('test4@test.com');
        $comment->setComment('Doesn\'t Bill Gates have something like that?');
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $comment = new Comment();
        //$comment->setUser('Gary');
        $comment->setEmail('test@test.com');
        $comment->setComment('Bill Who?');
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
