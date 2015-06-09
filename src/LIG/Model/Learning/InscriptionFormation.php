<?php

namespace LIG\Model\Learning;

use LIG\Model\Formation\FormationInterface;

class InscriptionFormation extends Inscription
{
    protected $formation;

    public function __construct(FormationInterface $formation, Student $student, \DateTime $dateInscription = null)
    {
        $this->formation = $formation;

        parent::__construct($student, $dateInscription);
    }
    public function getFormation()
    {
        return $this->formation;
    }

    public function setFormation(FormationInterface $formation)
    {
        $this->formation = $formation;

        return $this;
    }
}
