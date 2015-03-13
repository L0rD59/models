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

    }


    /**
     * @return string
     */
    static function getType(){}

    abstract function serialize();

    public function unserialize($value)
    {
        return unserialize($value);
    }
}