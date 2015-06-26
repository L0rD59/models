<?php

namespace LIG\Entity\Learning;

use LIG\Entity\Learning\Inscription as BaseInscription;

class InscriptionCours extends BaseInscription
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
