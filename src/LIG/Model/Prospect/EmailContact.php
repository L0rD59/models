<?php

namespace LIG\Model\Prospect;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
class EmailContact extends AbstractContact
{
    const __TYPE__ = 'email';

    /**
     * @var string $email
     *
     * @ORM\Column(type="string")
     */
    protected $email;


    public function __construct($email)
    {
        parent::__construct();
        $this->setEmail($email);
    }

    /**
     * @see inheritdoc
     * @return string
     */
    public function getType()
    {
        return self::__TYPE__;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function serialize()
    {
        return serialize($this->email);
    }

    public function unserialize($value)
    {
        return unserialize($value);
    }
}