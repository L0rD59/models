<?php

namespace LIG\DataFixtures\ORM\Formation;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIG\Entity\Formation\FormationDiplomante;
use LIG\Entity\Formation\FormationQualifiante;
use Nelmio\Alice\Fixtures\Loader;
use Nelmio\Alice\Persister\Doctrine;

class LoadFormationData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
//        // with alice : load objects from a yaml file
//        $loader = new Loader();
//        $objects = $loader->load(__DIR__.'/data/formations.yml');
//
//        $persister = new Doctrine($manager);
//        $persister->persist($objects);

//        \Doctrine\Common\Util\Debug::dump( $this->getReference('degree-bts')->getId());
        $formationQualifianteOptionEsthetiqueCosmetique = new FormationQualifiante("Option esthétique/cosmétique", 120);
        $formationQualifianteOptionModeHabillement = new FormationQualifiante("Option mode/habillement", 120);
        $formationQualifianteConseillerVente = new FormationQualifiante("Conseiller(ère) Vente", 580);
        $formationQualifianteConseillerVenteSpeMode = new FormationQualifiante("Conseiller(ère) Vente - Spécialité Mode", 700);
        $formationQualifianteConseillerVenteSpeEsthetique = new FormationQualifiante("Conseiller(ère) Vente - Spécialité Esthétique", 700);
        $formationQualifianteHotesseCommerciale = new FormationQualifiante("Hôtesse commerciale", 620);
        $formationQualifianteAgentImmobilier2008 = new FormationQualifiante("Agent Immobilier (version 2008)", 594);

        $formationDiplomantePI = new FormationDiplomante("Professions Immobilières", 2376, "PI", $this->getReference('degree-bts'));
        $formationDiplomantePIEP = new FormationDiplomante("Professions Immobilières - Enseignement Professionnel", 1188, "PI - EP", $this->getReference('degree-bts'));
        $formationDiplomantePIEG = new FormationDiplomante("Professions Immobilières - Enseignement Général", 1188, "PI - EG", $this->getReference('degree-bts'));
        $formationDiplomanteMUCEP = new FormationDiplomante("Management des Unités Commerciales - Enseignement Professionnel", 1116, "MUC - EP", $this->getReference('degree-bts'));
        $formationDiplomanteMUCEG = new FormationDiplomante("Management des Unités Commerciales - Enseignement Général", 1116, "MUC - EG", $this->getReference('degree-bts'));
        $formationDiplomanteMUC = new FormationDiplomante("Management des Unités Commerciales", 2232, "MUC", $this->getReference('degree-bts'));
        $formationDiplomanteNRC = new FormationDiplomante("Négociation et Relation Client", 2160, "NRC", $this->getReference('degree-bts'));
        $formationDiplomanteNRCEP = new FormationDiplomante("Négociation et Relation Client - Enseignement Professionnel", 1080, "NRC - EP", $this->getReference('degree-bts'));
        $formationDiplomanteNRCEG = new FormationDiplomante("Négociation et Relation Client - Enseignement Général", 1080, "NRC - EG", $this->getReference('degree-bts'));
        $formationDiplomanteAG = new FormationDiplomante("Assistant de Gestion PME/PMI", 2232, "AG PME/PMI", $this->getReference('degree-bts'));
        $formationDiplomanteAGEP = new FormationDiplomante("Assistant de Gestion PME/PMI - Enseignement Professionnel", 1116, "AG PME/PMI - EP", $this->getReference('degree-bts'));
        $formationDiplomanteAGEG = new FormationDiplomante("Assistant de Gestion PME/PMI - Enseignement Général", 1116, "AG PME/PMI - EG", $this->getReference('degree-bts'));
        $formationDiplomanteCommunication = new FormationDiplomante("Communication", 2016, "COM", $this->getReference('degree-bts'));
        $formationDiplomanteCommunicationEG = new FormationDiplomante("Communication - Enseignement Général", 0, "COM - EG", $this->getReference('degree-bts'));
        $formationDiplomanteCommunicationEP = new FormationDiplomante("Communication - Enseignement Professionnel", 0, "COM - EP", $this->getReference('degree-bts'));

        $manager->persist($formationQualifianteOptionEsthetiqueCosmetique);
        $manager->persist($formationQualifianteOptionModeHabillement);
        $manager->persist($formationQualifianteConseillerVente);
        $manager->persist($formationQualifianteConseillerVenteSpeMode);
        $manager->persist($formationQualifianteConseillerVenteSpeEsthetique);
        $manager->persist($formationQualifianteHotesseCommerciale);
        $manager->persist($formationQualifianteAgentImmobilier2008);

        $manager->persist($formationDiplomantePI);
        $manager->persist($formationDiplomantePIEP);
        $manager->persist($formationDiplomantePIEG);
        $manager->persist($formationDiplomanteMUCEP);
        $manager->persist($formationDiplomanteMUCEG);
        $manager->persist($formationDiplomanteMUC);
        $manager->persist($formationDiplomanteNRC);
        $manager->persist($formationDiplomanteNRCEP);
        $manager->persist($formationDiplomanteNRCEG);
        $manager->persist($formationDiplomanteAG);
        $manager->persist($formationDiplomanteAGEP);
        $manager->persist($formationDiplomanteAGEG);
        $manager->persist($formationDiplomanteCommunication);
        $manager->persist($formationDiplomanteCommunicationEG);
        $manager->persist($formationDiplomanteCommunicationEP);

        $manager->flush();

        $this->addReference('formation-qualifiante-option-esthetique-cosmethique', $formationQualifianteOptionEsthetiqueCosmetique);
        $this->addReference('formation-qualifiante-option-mode-habillement', $formationQualifianteOptionModeHabillement);
        $this->addReference('formation-qualifiante-conseiller-vente', $formationQualifianteConseillerVente);
        $this->addReference('formation-qualifiante-conseiller-vente-spe-mode', $formationQualifianteConseillerVenteSpeMode);
        $this->addReference('formation-qualifiante-conseiller-vente-spe-esthetique', $formationQualifianteConseillerVenteSpeEsthetique);
        $this->addReference('formation-qualifiante-hotesse-commerciale', $formationQualifianteHotesseCommerciale);
        $this->addReference('formation-qualifiante-agent-immobilier-2008', $formationQualifianteAgentImmobilier2008);
    }

    public function getOrder()
    {
        return 2;
    }
}