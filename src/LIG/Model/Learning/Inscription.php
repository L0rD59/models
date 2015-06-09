<?php

namespace LIG\Model\Learning;

use Doctrine\ORM\Mapping as ORM;

/**
 * @MappedSuperclass
 */
class Inscription implements InscriptionInterface
{
    /**
     * @var \DateTime $dateInscription Date d'inscription au campus
     *
     * @Column(type="datetime")
     */
    protected $dateInscription;

    /**
     * @var Student $student Etudiant inscrit
     *
     * @ManyToOne(targetEntity="Student", inversedBy="inscriptions", cascade={"all"}, fetch="EAGER")
     */
    protected $student;

    public function __construct(Student $student, \DateTime $dateInscription = null)
    {
        $this->student = $student;
        $this->dateInscription = !is_null($dateInscription) ? $dateInscription : new \DateTime();
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTime $dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getStudent()
    {
        return $this->student;
    }
}
