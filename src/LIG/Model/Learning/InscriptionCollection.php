<?php

namespace LIG\Model\Learning;

use Doctrine\Common\Collections\ArrayCollection;

class InscriptionCollection extends ArrayCollection
{
    public function __construct(array $inscriptions)
    {
        if(!count($inscriptions)){
            throw new \Exception('InscriptionCollection cannot be empty');
        }

        array_walk($inscriptions, function ($inscription, $i) {
            if (!$inscription instanceof InscriptionInterface) {
                throw new \Exception('Invalid item (#'.$i.') in InscriptionCollection expected instance of InscriptionInterface'.(is_object($inscription) ? ' '.get_class($inscription).' given' : ''));
            }
        });

        parent::__construct($inscriptions);
    }

    public function add($inscription)
    {
        if(!$inscription instanceof InscriptionInterface){
            throw new \Exception('Invalid inscription');
        }

        return parent::add($inscription);
    }

}
