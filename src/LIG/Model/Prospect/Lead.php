<?php

namespace LIG\Model\Prospect;

use LIG\Model\Formation\Formation;
use Sylius\Component\Addressing\Model\AddressInterface;

class Lead
{
    /**
     * @var string $firstname
     * Firstname of lead
     */
    protected $firstname;

    /**
     * @var string $lastname
     * Lastname of lead
     */
    protected $lastname;

    /**
     * @var string $email
     * Email of lead
     */
    protected $email;

    /**
     * @var string $phone
     * Phone of lead
     */
    protected $phone;

    /**
     * @var string $formation
     * Formation of lead
     */
    protected $formation;

    /**
     * @var integer $gender
     * Gender of lead
     */
    protected $gender;

    /**
     * @var \DateTime $birthday
     * Date of birth of lead
     */
    protected $birthday;

    /**
     * @var \Sylius\Component\Addressing\Model\AddressInterface
     * Address of lead
     */
    protected $address;

    public function __construct($firstname, $lastname, $email, $phone, $formation)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->formation = $formation;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return \LIG\Model\Formation\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @param \DateTime $birthday
     * @return $this
     */
    public function setBirthday(\DateTime $birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @param AddressInterface $address
     * @return $this
     */
    public function setAddress(AddressInterface $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return AddressInterface
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function setFormation(Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }
}
