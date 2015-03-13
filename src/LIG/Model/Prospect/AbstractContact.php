<?php

namespace LIG\Model\Prospect;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class AbstractContact implements ContactInterface
{
    /**
     * @var string $type
     *
     * @ORM\Column(type="string")
     */
    protected $type;

    public function __construct()
    {
        $this->setType($this->getType());
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    abstract function getType();

    abstract function serialize();

    public function unserialize($value)
    {
        return unserialize($value);
    }
}