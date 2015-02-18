<?php

namespace LIG\Model\Learning;

class Inscription
{
    /** @var \DateTime $dateInscription */
    protected $dateInscription;

    /** @var  AbstractCampus $campus */
    protected $campus;

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTime $dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    public function getCampus()
    {
        return $this->campus;
    }

    public function setCampus(AbstractCampus $campus)
    {
        $this->campus = $campus;
    }
}
