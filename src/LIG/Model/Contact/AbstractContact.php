<?php

namespace LIG\Model\Contact;

use Doctrine\ORM\Mapping as ORM;
use LIG\Model\Common\OwnableInterface;
use LIG\Model\Common\OwnerInterface;

/**
 * @MappedSuperclass
 */
abstract class AbstractContact implements ContactInterface, OwnableInterface
{
    /**
     * @var string $name Nom du contact
     *
     * @Column(nullable=false)
     */
    protected $name;

    /**
     * @var OwnerInterface $owner Propriétaire du contact
     *
     * @ManyToOne(targetEntity="LIG\Model\Prospect\ContactOwnerInterface")
     */
    protected $owner;

    /**
     * @var mixed
     */
    protected $value;

    public function __construct($name, ContactOwnerInterface $owner, $value)
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->setValue($value);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(OwnerInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function serialize()
    {
        $this->getValue()->serialize();
    }

    public function unserialize($value)
    {
        return unserialize($value);
    }
}