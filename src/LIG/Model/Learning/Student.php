<?php

namespace LIG\Model\Learning;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @MappedSuperclass
 */
class Student
{
    /**
     * @var Inscription[] $inscription Inscriptions au campus de l'étudiant
     *
     * @OneToMany(targetEntity="Inscription", mappedBy="student", cascade={"all"})
     */
    protected $inscriptions;

    public function __construct()
    {
        $this->inscriptions = new ArrayCollection();
    }

    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    public function hasInscription()
    {
        return (bool) $this->inscriptions->count();
    }
}
