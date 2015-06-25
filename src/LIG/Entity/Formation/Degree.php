<?php

namespace LIG\Entity\Formation;

use LIG\Model\Formation\Degree as ModelDegree;

/**
 * @Entity
 */
class Degree extends ModelDegree
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}