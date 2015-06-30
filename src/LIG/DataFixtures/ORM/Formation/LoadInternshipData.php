<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\Degree;
use LIG\Entity\Formation\Internship;

class LoadInternshipData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $internship = new Internship(new \DateTime(''), 'Stage de la formation BTS ? ou pas spécifiquement ?');

        $manager->persist($internship);

        $manager->flush();

        $this->addReference('internship-bts', $internship);
    }

    public function getOrder()
    {
        return 1;
    }
}