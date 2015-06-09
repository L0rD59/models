<?php

namespace LIG\Model\Learning;

interface InscriptionInterface
{
    /**
     * Get date of inscription
     *
     * @return \DateTime
     */
    public function getDateInscription();

    /**
     * Set date of inscription
     *
     * @param \DateTime $dateInscription
     *
     * @return self
     */
    public function setDateInscription(\DateTime $dateInscription);
}