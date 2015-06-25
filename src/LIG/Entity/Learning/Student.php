<?php

namespace LIG\Entity\Learning;

use LIG\Model\Learning\Student as ModelStudent;

/**
 * @Entity
 */
class Student extends ModelStudent
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}