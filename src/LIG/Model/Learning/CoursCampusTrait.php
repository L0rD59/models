<?php

namespace LIG\Model\Learning;

trait CoursCampusTrait
{
    use AbstractCampusTrait{
        AbstractCampusTrait::__construct as __acConstruct;
//        AbstractCampusTrait::name as undefined;
    }

    /**
     * @var string $reference Reference unique du cours
     *
     * @Column(nullable=false, unique=true)
     */
    protected $reference;

    public function __construct($name, $reference)
    {
        $this->__acConstruct($name);
        $this->reference = $reference;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }
}
