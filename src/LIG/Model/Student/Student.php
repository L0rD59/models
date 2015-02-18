<?php

namespace LIG\Model\Student;

use Doctrine\Common\Collections\ArrayCollection;

class Student
{
    /** @var Inscription[] $inscription */
    protected $inscriptions;

    public function __construct()
    {
        $this->inscriptions = new ArrayCollection();
    }

    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    public function hasInscription()
    {
        return (bool) $this->inscriptions->count();
    }
}
