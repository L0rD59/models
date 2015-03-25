<?php

namespace LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Geocoder\Result\Geocoded;
use Sylius\Component\Attribute\Model\AttributeSubjectInterface;
use Sylius\Component\Attribute\Model\AttributeValueInterface;

/**
 * @ORM\MappedSuperclass
 */
class Prospect implements ProspectInterface, ContacteableInterface, AttributeSubjectInterface
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
     * @var ContactCollection | AbstractContact[] $contacts
     *
     * @ORM\ManyToOne(targetEntity="ContactInterface", mappedBy="prospect")
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id")
     */
    protected $contacts;

    /**
     * @var string $geocode
     *
     * @ORM\Column(type="string")
     */
    protected $geocode;

    /**
     * @var string $geocode
     *
     * @ORM\Column(type="string")
     */
    protected $provider;

    /**
     * @var InvoiceSubjectInterface | OwnerInterface $owner
     *
     * @ORM\ManyToOne(targetEntity="OwnerInterface")
     */
    protected $owner;

    /**
     * @var ArrayCollection | AttributeInterface[]
     */
    protected $attributes;

    public function __construct(ContactCollection $contacts, $provider, OwnerInterface $owner)
    {
        $this->provider = $provider;
        $this->contacts = $contacts;
        $this->owner = $owner;
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

    public function hasContacts()
    {
        return $this->contacts->hasContact();
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

    public function getGeocode()
    {
        return $this->geocode;
    }

    public function setGeocode($geocode)
    {
        $this->geocode = $geocode;

        return $this;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(OwnerInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function setAttributes(Collection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function removeAttribute(AttributeValueInterface $attribute)
    {
        $this->attributes->removeElement($attribute);
    }

    public function addAttribute(AttributeValueInterface $attribute)
    {
        return $this->attributes->add($attribute);
    }

    public function hasAttribute(AttributeValueInterface $attribute)
    {
        return $this->attributes->contains($attribute);
    }

    public function hasAttributeByName($attributeName)
    {
        return $this->attributes->exists(
            function($key, $attribute) use ($attributeName){
                return ($attribute->getName() === $attributeName);
            }
        );
    }

    public function getAttributeByName($attributeName)
    {
        return $this->attributes->filter(
            function($attribute) use ($attributeName){
                return ($attribute->getName() === $attributeName);
            }
        );
    }
}
