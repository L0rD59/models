<?php

namespace LIG\Model\Prospect;

class FacebookContact extends AbstractContact
{
    const __TYPE__ = 'facebook';

    /** @var  string $fbId */
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
