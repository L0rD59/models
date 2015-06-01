<?php

namespace LIG\Model\Learning;

interface CoursCampusInterface extends AbstractCampusInterface
{
    public function getReference();

    public function setReference($reference);
}
