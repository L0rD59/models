<?php

namespace spec\LIG\Model\Prospect;

use LIG\Model\Formation\Formation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Addressing\Model\AddressInterface;

class LeadSpec extends ObjectBehavior
{
    function let($firstname, $lastname, $email, $phone, Formation $formation)
    {
        $this->beConstructedWith($firstname, $lastname, $email, $phone, $formation);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\Lead');
    }

    public function it_should_have_a_muteable_firstname($firstname)
    {
        $this->getFirstname()->shouldNotBe(null);

        $this->setFirstname($firstname)->getFirstname()->shouldReturn($firstname);
    }

    public function it_should_have_a_muteable_lastname($lastname)
    {
        $this->getLastname()->shouldNotBe(null);

        $this->setLastname($lastname)->getLastname()->shouldReturn($lastname);
    }

    public function it_should_have_a_muteable_email($email)
    {
        $this->getEmail()->shouldNotBe(null);

        $this->setEmail($email)->getEmail()->shouldReturn($email);
    }

    public function it_should_have_a_muteable_phone($phone)
    {
        $this->getPhone()->shouldNotBe(null);

        $this->setPhone($phone)->getPhone()->shouldReturn($phone);
    }

    public function it_should_have_a_muteable_formation(Formation $formation)
    {
        $this->getFormation()->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');

        $this->setFormation($formation)->getFormation()->shouldReturn($formation);
    }

    public function it_could_have_a_muteable_gender($gender)
    {
        $this->setGender($gender)->getGender()->shouldReturn($gender);
    }

    public function it_could_have_a_muteable_birthday(\DateTime $birthday)
    {
        $this->setBirthday($birthday)->getBirthday()->shouldReturn($birthday);
    }

    public function it_could_have_a_muteable_address(AddressInterface $address)
    {
        $this->setAddress($address)->getAddress()->shouldReturn($address);
    }
}
