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
        $comment->setEmail('test@test.com');
        $comment->setComment('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test2@test.com');
        $comment->setComment('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!');
        $comment->setUser($manager->merge($this->getReference('user-2')));
        $comment->setLink($manager->merge($this->getReference('link-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test3@test.com');
        $comment->setComment('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $comment->setUser($manager->merge($this->getReference('user-2')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test4@test.com');
        $comment->setComment('Are you challenging me? ');
        $comment->setUser($manager->merge($this->getReference('user-2')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test@test.com');
        $comment->setComment('Name your stakes.');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test@test.com');
        $comment->setComment('If I win, you become my slave.');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test3@test.com');
        $comment->setComment('Your SLAVE?');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test2@test.com');
        $comment->setComment('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test5@test.com');
        $comment->setComment('And if I win?');
        $comment->setUser($manager->merge($this->getReference('user-2')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test3@test.com');
        $comment->setComment('Make it my first-born!');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test@test.com');
        $comment->setComment('Make it our first-date!');
        $comment->setUser($manager->merge($this->getReference('user-2')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test2@test.com');
        $comment->setComment('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $comment->setUser($manager->merge($this->getReference('user-2')));
        $comment->setLink($manager->merge($this->getReference('link-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test6@test.com');
        $comment->setComment('It\'s not gonna end like this.');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test2@test.com');
        $comment->setComment('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test4@test.com');
        $comment->setComment('Doesn\'t Bill Gates have something like that?');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setEmail('test@test.com');
        $comment->setComment('Bill Who?');
        $comment->setUser($manager->merge($this->getReference('user-1')));
        $comment->setLink($manager->merge($this->getReference('link-3')));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
