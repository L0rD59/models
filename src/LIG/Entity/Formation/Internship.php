<?php

namespace LIG\Entity\Formation;

use LIG\Model\Formation\Internship as BaseInternship;

class Internship extends BaseInternship
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
