<?php

namespace LIG\Entity\Formation;


/**
 * @Entity
 */
class Business
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}