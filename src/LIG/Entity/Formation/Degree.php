<?php

namespace LIG\Entity\Formation;

use LIG\Model\Formation\Degree as BaseDegree;

class Degree extends BaseDegree
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
