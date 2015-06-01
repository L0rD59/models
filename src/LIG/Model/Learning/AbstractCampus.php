<?php

namespace LIG\Model\Learning;

use Doctrine\ORM\Mapping as ORM;

/**
 * @MappedSuperclass
 */
abstract class AbstractCampus
{
    use AbstractCampusTrait;
}