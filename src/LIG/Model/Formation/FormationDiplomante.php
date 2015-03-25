<?php

namespace LIG\Model\Formation;

class FormationDiplomante extends Formation
{
    public function __construct($name, $shortname, $duration, Degree $degree, Business $business, Internship $internship)
    {
        parent::__construct($name, $shortname, $duration, $degree, $business, $internship);
    }
}
