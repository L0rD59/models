<?php

namespace LIG\Model\Learning;

use LIG\Model\Formation\FormationInterface;

class InscriptionCours extends Inscription
{
    protected $cours;

    public function __construct($cours, Student $student, \DateTime $dateInscription = null)
    {
        $this->cours = $cours;

        parent::__construct($student, $dateInscription);
    }
    public function getCours()
    {
        return $this->cours;
    }

    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }

}
