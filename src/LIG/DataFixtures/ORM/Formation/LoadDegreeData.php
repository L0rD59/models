<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\Degree;

class LoadDegreeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $degree = new Degree('Brevet de Technicien Supérieur', 'BTS');
        $manager->persist($degree);

        $this->addReference('degree-bts', $degree);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}