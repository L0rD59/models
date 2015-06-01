<?php

namespace LIG\Model\Contact;

trait FacebookContactTrait
{
    /**
     * @var string $fbId
     *
     * @Column(nullable=false, unique=true)
     */
    protected $fbId;

    public function __construct($fbId)
    {
        $this->setFbId($fbId);
    }

    public function getFbId()
    {
        return $this->fbId;
    }

    public function setFbId($fbId)
    {
        $this->fbId = $fbId;

        return $this;
    }

    public function serialize()
    {
        return serialize($this->fbId);
    }
}
