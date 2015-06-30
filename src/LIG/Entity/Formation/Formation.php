<?php

namespace LIG\Entity\Formation;

use Doctrine\Common\Collections\ArrayCollection;
use LIG\Model\Formation\Formation as BaseFormation;

class Formation extends  BaseFormation
{
    protected $id;

    /** @var ArrayCollection<LessonConfiguration> $lessonsConfiguration */
    protected $lessonsConfiguration;

    public function getId()
    {
        return $this->id;
    }

    public function setLessonsConfiguration(ArrayCollection $lessonsConfiguration)
    {
        $this->lessonsConfiguration = $lessonsConfiguration;

        return $this;
    }

    public function getLessonsConfiguration()
    {
        return $this->lessonsConfiguration;
    }
}
