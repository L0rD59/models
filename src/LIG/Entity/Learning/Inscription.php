<?php

namespace LIG\Entity\Learning;

use LIG\Model\Learning\Inscription as ModelInscription;

/**
 * @Entity
 */
class Inscription extends ModelInscription
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}