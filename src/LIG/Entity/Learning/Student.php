<?php

namespace LIG\Entity\Learning;

use LIG\Model\Learning\Student as BaseStudent;

class Student extends BaseStudent
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
