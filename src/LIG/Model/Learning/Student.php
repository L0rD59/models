<?php

namespace LIG\Model\Learning;

use Doctrine\Common\Collections\ArrayCollection;


class Student
{
    /**
     * @var Inscription[] $inscription Inscriptions au campus de l'étudiant
     **/
    protected $inscriptions;

    public function __construct(ArrayCollection $inscriptions)
    {
        $this->inscriptions = $inscriptions;
    }

    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    public function hasInscriptions()
    {
        return (bool) $this->inscriptions->count();
    }

    public function setInscriptions(InscriptionCollection $inscriptions)
    {
        $this->inscriptions = $inscriptions;

        return $this;
    }
}
