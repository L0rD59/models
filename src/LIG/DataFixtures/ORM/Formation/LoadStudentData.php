<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\Degree;
use Nelmio\Alice\Fixtures;
use Nelmio\Alice\Persister\Doctrine;

class LoadStudentData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // load objects from a yaml file
//        $loader = new Fixtures\Loader();
//        $objects = $loader->load(__DIR__.'/data/students.yml');
//
//        $persister = new Doctrine($manager);
//        $persister->persist($objects);
    }

    public function getOrder()
    {
        return 1;
    }
}