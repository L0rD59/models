<?php

namespace LIG\Entity\Learning;

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({
 *   "cours" = "CoursCampus",
 *   "formation" = "FormationCampus"
 * })
 */
abstract class AbstractCampus
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}