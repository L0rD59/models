<?php

namespace LIG\Model\Learning;

class Cours
{
    /** @var string $name Nom du cours */
    protected $name;

    /** @var string $reference Reference unique du cours */
    protected $reference;

    public function __construct($name, $reference)
    {
        $this->name = $name;
        $this->reference = $reference;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
