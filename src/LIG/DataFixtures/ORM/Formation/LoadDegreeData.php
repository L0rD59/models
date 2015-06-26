<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\Degree;
use Nelmio\Alice\Fixtures\Loader;
use Nelmio\Alice\Persister\Doctrine;

class LoadDegreeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // load objects from a yaml file
        $loader = new Loader();
        $objects = $loader->load(__DIR__.'/data/degrees.yml');

        $persister = new Doctrine($manager);
        $persister->persist($objects);
    }

    public function getOrder()
    {
        return 1;
    }
}