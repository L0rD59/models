<?php

namespace LIG\Model\Learning;

use Doctrine\ORM\Mapping as ORM;

/**
 * @MappedSuperclass
 */
class Inscription
{
    /**
     * @var \DateTime $dateInscription Date d'inscription au campus
     *
     * @Column(type="datetime")
     */
    protected $dateInscription;

    /**
     * @var AbstractCampus $campus Campus auquel l'étudiant est inscrit
     *
     * @ManyToOne(targetEntity="AbstractCampus", cascade={"all"}, fetch="EAGER")
     */
    protected $campus;

    /**
     * @var Student $student Etudiant inscrit
     *
     * @ManyToOne(targetEntity="Student", inversedBy="inscriptions", cascade={"all"}, fetch="EAGER")
     */
    protected $student;

    public function __construct(Student $student, AbstractCampus $campus, \DateTime $dateInscription = null)
    {
        $this->student = $student;
        $this->campus = $campus;
        $this->dateInscription = !is_null($dateInscription) ? $dateInscription : new \DateTime();
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function getCampus()
    {
        return $this->campus;
    }

    public function getStudent()
    {
        return $this->student;
    }
}
