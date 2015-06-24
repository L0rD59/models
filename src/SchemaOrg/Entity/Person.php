<?php

namespace SchemaOrg\Entity;

use Doctrine\ORM\Mapping as ORM;
use SchemaOrg\Model\PersonInterface;

/**
 * {@inheritdoc}
 *
 *
 * @ORM\MappedSuperclass
 */
abstract class Person extends Thing implements PersonInterface
{
}
