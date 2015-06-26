<?php

namespace LIG\Model\Formation\Stubs;

use LIG\Model\Formation\Business;
use LIG\Model\Formation\Degree;
use LIG\Model\Formation\Formation;
use LIG\Model\Formation\FormationDiplomanteTrait;
use LIG\Model\Formation\Internship;

class FormationDiplomante extends Formation
{
    protected $degree;

    protected $internship;

    public function __construct($name, $duration, $shortname = null, Degree $degree, Internship $internship)
    {
        $this->degree = $degree;

        $this->internship = $internship;

        parent::__construct($name, $duration, $shortname);
    }
    
    public function getDegree()
    {
        return $this->degree;
    }

    public function getInternship()
    {
        return $this->internship;
    }

    public function setDegree(Degree $degree)
    {
        $this->degree = $degree;

        return $this;
    }

    public function setInternship(Internship $internship)
    {
        $this->internship = $internship;

        return $this;
    }
}
