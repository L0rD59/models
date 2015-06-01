<?php

namespace LIG\Model\Formation;

trait FormationDiplomanteTrait
{
    public function __construct($name, $shortname, $duration, Degree $degree, Business $business, Internship $internship)
    {
        parent::__construct($name, $shortname, $duration, $degree, $business, $internship);
    }
}
