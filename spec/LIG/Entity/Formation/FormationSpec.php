<?php

namespace spec\LIG\Entity\Formation;

use Doctrine\Common\Collections\ArrayCollection;
use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationSpec extends ObjectBehavior
{
    public function let($name, $duration, $shortname)
    {
        $this->beConstructedWith($name, $duration, $shortname);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Entity\Formation\Formation');
        $this->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');
    }

    public function it_could_have_a_lessons_configuration(ArrayCollection $lessonsConfiguration)
    {
        $this->setLessonsConfiguration($lessonsConfiguration)->getLessonsConfiguration()->shouldReturn($lessonsConfiguration);
    }

}
