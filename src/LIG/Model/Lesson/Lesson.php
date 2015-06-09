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
     * Code of lesson
     *
     * @var string $code
     */
    protected $code;

    /**
     * Steps of lesson
     *
     * @var \RecursiveTreeIterator
     */
    protected $steps;

    public function __construct()
    {
        $this->steps = new StepTreeIterator();
    }
    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getSteps()
    {
        return $this->steps;
    }
}
