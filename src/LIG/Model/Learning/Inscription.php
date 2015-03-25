<?php

namespace LIG\Model\Learning;

use Doctrine\ORM\Mapping as ORM;

class Inscription
{
    /**
     * @var \DateTime $dateInscription Date d'inscription au campus
     *
     * @ORM\Column(type="datetime")
     */
    protected $dateInscription;

    /**
     * @var  AbstractCampus $campus Campus auquel l'étudiant est inscrit
     */
    protected $campus;

    /** @var  Student $student */
    protected $student;

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

    public function getStudent()
    {
        return $this->student;
    }

    public function setStudent(Student $student)
    {
        $this->student = $student;
    }
}
