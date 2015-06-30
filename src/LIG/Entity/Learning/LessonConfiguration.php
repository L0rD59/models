<?php

namespace LIG\Entity\Learning;

use LIG\Model\Formation\Formation;
use LIG\Model\Lesson\Lesson;

class LessonConfiguration
{
    protected $id;

    /** @var Lesson $lesson */
    protected $lesson;

    /** @var Formation $formation */
    protected $formation;

    /** @var \DateInterval $assignmentPeriod */
    protected $assignmentPeriod;

    public function __construct(Lesson $lesson, Formation $formation)
    {
        $this->lesson = $lesson;
        $this->formation = $formation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLesson()
    {
        return $this->lesson;
    }

    public function getFormation()
    {
        return $this->formation;
    }

    public function setAssignmentPeriod(\DateInterval $assignmentPeriod)
    {
        $this->assignmentPeriod = $assignmentPeriod;

        return $this;
    }

    public function setLesson(Lesson $lesson)
    {
        $this->lesson = $lesson;

        return $this;
    }

    public function setFormation(Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    public function getAssignmentPeriod()
    {
        return $this->assignmentPeriod;
    }
}
