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

    /**
     * @return string
     */
    public static function getType(){
        return self::__TYPE__;
    }

    abstract function serialize();

    public function unserialize($value)
    {
        return unserialize($value);
    }
}