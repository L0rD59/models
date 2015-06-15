<?php

namespace LIG\Model\Formation;

class Formation implements FormationInterface
{
    /**
     * @var string $name Nom de la formation
     */
    protected $name;

    /**
     * @var string $shortname Petit-nom de la formation
     */
    protected $shortname;

    /**
     * @var Degree $degree Niveau requis de la formation
     *
     * @OneToOne(targetEntity="Degree")
     * @JoinColumn(name="degree_id", referencedColumnName="id")
     */
    protected $degree;

    /**
     * @var Internship $internship Stage de la formation
     *
     * @OneToOne(targetEntity="Internship")
     * @JoinColumn(name="internship_id", referencedColumnName="id", nullable=true)
     */
    protected $internship = null;

    /**
     * @var integer $duration Durée de la formation
     *
     * @Column(type="integer")
     */
    protected $duration;

    public function __construct($name, $shortname, $duration, Degree $degree, Internship $internship = null)
    {
        $this->name = $name;
        $this->shortname = $shortname;
        $this->duration = $duration;
        $this->degree = $degree;

        $this->internship = $internship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getShortname()
    {
        return $this->shortname;
    }

    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    public function getDegree()
    {
        return $this->degree;
    }

    public function setDegree(Degree $degree)
    {
        $this->degree = $degree;

        return $this;
    }

    public function getInternship()
    {
        return $this->internship;
    }

    public function setInternship(Internship $internship)
    {
        $this->internship = $internship;

        return $this;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }
}
