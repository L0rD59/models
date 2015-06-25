<?php

namespace LIG\Entity\Formation;

use LIG\Model\Formation\Internship as ModelInternship;

/**
 * @Entity
 */
class Internship extends ModelInternship
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}