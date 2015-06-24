<?php

namespace SchemaOrg\Entity;

use Doctrine\ORM\Mapping as ORM;
use SchemaOrg\Model\StudentInterface;

/**
 * {@inheritdoc}
 *
 *
 * @ORM\Entity
 */
class Student extends Person implements StudentInterface
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Sets id.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
