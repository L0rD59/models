<?php

namespace LIG\Model\Lesson;

class Lesson
{
    /**
     * Name of lesson
     *
     * @var string $name
     */
    protected $name;

    /**
     * Reference of lesson
     *
     * @var string $code
     */
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

    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
}
