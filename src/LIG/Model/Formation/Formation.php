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
     * @var integer $duration Durée de la formation
     *
     * @Column(type="integer")
     */
    protected $duration;

    public function __construct($name, $duration, $shortname = null)
    {
        $this->name = $name;
        $this->shortname = $shortname;
        $this->duration = $duration;
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
