<?php

namespace LIG\Model\Formation;

interface FormationDiplomanteInterface
{
    public function __construct($name, $shortname, $duration, Degree $degree, Business $business, Internship $internship);
}
