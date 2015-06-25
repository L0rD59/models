<?php

namespace LIG\Entity\Prospect;

/**
 * @Entity
 */
class Prospect extends \LIG\Model\Prospect\Prospect
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}