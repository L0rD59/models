<?php

namespace LIG\Entity\Lesson;

use LIG\Model\Lesson\Lesson as BaseLesson;

class Lesson extends BaseLesson
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
