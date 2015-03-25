<?php

namespace LIG\Model\Formation;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperlass
 */
class Formation implements FormationInterface
{
    /**
     * @var string $name Nom de la formation
     *
     * @ORM\Column()
     */
    protected $name;

    /**
     * @var string $shortname Petit-nom de la formation
     *
     * @ORM\Column()
     */
    protected $shortname;

    /**
     * @var Degree $degree Niveau requis de la formation
     *
     * @ORM\OneToOne(targetEntity="Degree")
     * @ORM\JoinColumn(name="degree_id", referencedColumnName="id")
     */
    protected $degree;

    /**
     * @var Business $business
     *
     * @OneToOne(targetEntity="Business")
     * @JoinColumn(name="business_id", referencedColumnName="id")
     */
    protected $business;

    /**
     * @var Internship $internship Stage de la formation
     *
     * @OneToOne(targetEntity="Internship")
     * @JoinColumn(name="internship_id", referencedColumnName="id", nulleable=true)
     */
    protected $internship = null;

    /**
     * @var integer $duration Durée de la formation
     *
     * @ORM\Column(type="integer")
     */
    protected $duration;

    public function __construct($name, $shortname, $duration, Degree $degree, Business $business, Internship $internship = null)
    {
        $this->name = $name;
        $this->shortname = $shortname;
        $this->duration = $duration;
        $this->degree = $degree;
        $this->business = $business;

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

    public function getBusiness()
    {
        return $this->business;
    }

    public function setBusiness(Business $business)
    {
        $this->business = $business;

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
