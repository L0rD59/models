<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\FormationDiplomante;
use LIG\Entity\Formation\FormationQualifiante;
use LIG\Entity\Lesson\Lesson;
use Nelmio\Alice\Fixtures\Loader;
use Nelmio\Alice\Persister\Doctrine;

class LoadLessonData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $lessonTechniquesDeVente = new Lesson("Techniques de vente", "5001");
        $lessonSuiviEtPresentationMarchandeDesProduits = new Lesson("Suivi et présentation marchande des produits", "5002");
        $lessonTechniquesDeRechercheDemploi = new Lesson("Techniques de recherche d'emploie", "5004");
        $lessonConnaissanceTechniqueDesProduitsTextiles = new Lesson("Connaissance technique des produites textiles", "5003");
        $lessonInitiationEsthetiqueCosmethique = new Lesson("Initiation esthétique cosméthique", "5007");
        $lessonMathematiquesCAP = new Lesson("Mathématiques CAP", "5006");
        $lessonCultureGenerale1erAnnee = new Lesson("Culture générale (1 ère année)", "4001");
        $lessonMathematiquesBTS = new Lesson("Mathématiques BTS", "4005");

        $manager->persist($lessonTechniquesDeVente);
        $manager->persist($lessonSuiviEtPresentationMarchandeDesProduits);
        $manager->persist($lessonTechniquesDeRechercheDemploi);
        $manager->persist($lessonConnaissanceTechniqueDesProduitsTextiles);
        $manager->persist($lessonInitiationEsthetiqueCosmethique);
        $manager->persist($lessonMathematiquesCAP);
        $manager->persist($lessonCultureGenerale1erAnnee);
        $manager->persist($lessonMathematiquesBTS);

        $manager->flush();

        $this->addReference('lesson-techniques-de-vente', $lessonTechniquesDeVente);

    }

    public function getOrder()
    {
        return 1;
    }
}