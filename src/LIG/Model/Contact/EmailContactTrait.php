<?php

namespace LIG\Model\Contact;

trait EmailContactTrait
{
    /**
     * @var string $email
     *
     * @Column(type="string")
     */
    protected $email;

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