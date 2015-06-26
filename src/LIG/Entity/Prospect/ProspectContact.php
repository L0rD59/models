<?php

namespace LIG\Entity\Prospect;

use LIG\Model\Contact\AbstractContact as ModelAbstractContact;

/**
 * @Entity
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({
 *   "email" = "LIG\Entity\Contact\EmailContact",
 *   "address" = "LIG\Entity\Contact\AddressContact",
 *   "facebook" = "LIG\Entity\Contact\FacebookContact",
 *   "telephone_number" = "LIG\Entity\Contact\TelephoneNumberContact"
 * })
 */
abstract class ProspectContact extends ModelAbstractContact
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}