<?php

namespace LIG\Model\Learning;

trait AbstractCampusTrait
{
    /**
     * @var string $name Nom du campus
     *
     * @Column()
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
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
}