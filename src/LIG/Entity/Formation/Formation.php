<?php

namespace LIG\Entity\Formation;

use LIG\Model\Formation\Formation as ModelFormation;

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({
 *   "" = "Formation",
 *   "certifiante" = "FormationCertifiante",
 *   "diplomante" = "FormationDiplomante",
 *   "qualifiante" = "FormationQualifiante"
 * })
 */
class Formation extends ModelFormation
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}