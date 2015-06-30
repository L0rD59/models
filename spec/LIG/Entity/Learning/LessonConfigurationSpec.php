<?php

namespace spec\LIG\Entity\Learning;

use LIG\Model\Formation\Formation;
use LIG\Model\Lesson\Lesson;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LessonConfigurationSpec extends ObjectBehavior
{
    function let(Lesson $lesson, Formation $formation)
    {
        $this->beConstructedWith($lesson, $formation);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Entity\Learning\LessonConfiguration');
    }

    function it_should_have_a_muteable_lesson(Lesson $lesson)
    {
        $this->getLesson()->shouldNotReturn(null);
        $this->setLesson($lesson)->getLesson()->shouldReturn($lesson);
    }

    function it_should_have_a_formation(Formation $formation)
    {
        $this->getFormation()->shouldNotReturn(null);
        $this->setFormation($formation)->getFormation()->shouldReturn($formation);
    }

    function it_could_have_an_assignment_period(\DateInterval $assignmentPeriode)
    {
        $this->setAssignmentPeriod($assignmentPeriode)->getAssignmentPeriod()->shouldReturn($assignmentPeriode);
    }
}
