<?php

namespace SchemaOrg\Entity;

use Doctrine\ORM\Mapping as ORM;
use SchemaOrg\Model\ThingInterface;

/**
 * {@inheritdoc}
 *
 *
 * @ORM\MappedSuperclass
 */
abstract class Thing implements ThingInterface
{
}
