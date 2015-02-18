<?php

namespace LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\MappedSuperclass
 */
class Prospect implements ProspectInterface, ContacteableInterface
{
    /**
     * @var string $firstname
     *
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     * @var string $firstname
     *
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     * @var string $firstname
     *
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string $firstname
     *
     * @ORM\Column(type="string")
     */
    protected $birthday;

    /**
     * @var Collection $coupons
     *
     * @ORM\OneToMany(targetEntity="CouponInterface")
     * @ORM\JoinColumn(name="id_prospect", referencedColumnName="id")
     */
    protected $coupons;

    /**
     * @var Collection $contacts
     *
     * @ORM\ManyToOne(targetEntity="ContactInterface", mappedBy="prospect")
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id")
     */
    protected $contacts;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
    }

    /**
     * @return Collection|\Traversable
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    public function addContact(ContactInterface $contact)
    {
        $contact->addProspect($this);
        $this->contacts->add($contact);

        return $this;
    }

    public function removeContact(ContactInterface $contact)
    {
        $this->contacts->removeElement($contact);

        return $this;
    }
    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }




}