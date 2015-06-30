<?php

namespace LIG\Entity\Formation;

class FormationDiplomante extends Formation
{
    /** @var Degree $degree */
    protected $degree;

    public function __construct($name, $duration, $shortname = null, Degree $degree)
    {
        $this->degree = $degree;

        parent::__construct($name, $duration, $shortname);
    }
}
