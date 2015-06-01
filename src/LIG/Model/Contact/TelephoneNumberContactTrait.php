<?php

namespace LIG\Model\Contact;

trait TelephoneNumberContactTrait
{
    /**
     * @var string $telephoneNumber
     *
     * @Column(nullable=false, unique=true)
     */
    protected $telephoneNumber;

    public function __construct($telephoneNumber)
    {
        $this->setTelephoneNumber($telephoneNumber);
    }

    public static function getType()
    {
        return self::__TYPE__;
    }

    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    public function serialize()
    {
        return serialize($this->telephoneNumber);
    }
}
