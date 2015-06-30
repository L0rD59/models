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
//        // with alice
//        $loader = new Loader();
//        $objects = $loader->load(__DIR__.'/data/degrees.yml');
//
//        $persister = new Doctrine($manager);
//        $persister->persist($objects);



        $degreeBTS = new Degree("Brevet Technicient Supérieur", "BTS");
        $degreeCAP = new Degree("Certificat d'Aptitude Professionel", "CAP");
        $degreeDEES = new Degree("Diplôme Européen d'Études Supérieures", "DEES");
        $degreeMaster = new Degree("Master", "Master");

        $manager->persist($degreeBTS);
        $manager->persist($degreeCAP);
        $manager->persist($degreeDEES);
        $manager->persist($degreeMaster);

        $manager->flush();

        $this->addReference('degree-bts', $degreeBTS);
        $this->addReference('degree-cap', $degreeCAP);
        $this->addReference('degree-dees', $degreeDEES);
        $this->addReference('degree-master', $degreeMaster);

    }

    public function getOrder()
    {
        return 1;
    }
}