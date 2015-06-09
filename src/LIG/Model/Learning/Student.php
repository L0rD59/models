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
