<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\FormationQualifiante;

class LoadFormationData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $degree = new FormationQualifiante('Formation Qualifiante 1', 'FQ 1', 1000, $this->getReference('degree-bts'), $this->getReference('internship-bts'));
        $manager->persist($degree);


        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}