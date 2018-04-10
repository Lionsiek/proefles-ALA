<?php

namespace proeflesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lesson
 *
 * @ORM\Table(name="lesson")
 * @ORM\Entity(repositoryClass="proeflesBundle\Repository\lessonRepository")
 */
class lesson
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="employee", type="integer")
     */
    private $employee;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_lesson", type="date")
     */
    private $dateOfLesson;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lesson_from", type="time")
     */
    private $lessonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lesson_until", type="time")
     */
    private $lessonUntil;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return lesson
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set employee
     *
     * @param integer $employee
     *
     * @return lesson
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return int
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return lesson
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set dateOfLesson
     *
     * @param \DateTime $dateOfLesson
     *
     * @return lesson
     */
    public function setDateOfLesson($dateOfLesson)
    {
        $this->dateOfLesson = $dateOfLesson;

        return $this;
    }

    /**
     * Get dateOfLesson
     *
     * @return \DateTime
     */
    public function getDateOfLesson()
    {
        return $this->dateOfLesson;
    }

    /**
     * Set lessonFrom
     *
     * @param \DateTime $lessonFrom
     *
     * @return lesson
     */
    public function setLessonFrom($lessonFrom)
    {
        $this->lessonFrom = $lessonFrom;

        return $this;
    }

    /**
     * Get lessonFrom
     *
     * @return \DateTime
     */
    public function getLessonFrom()
    {
        return $this->lessonFrom;
    }

    /**
     * Set lessonUntil
     *
     * @param \DateTime $lessonUntil
     *
     * @return lesson
     */
    public function setLessonUntil($lessonUntil)
    {
        $this->lessonUntil = $lessonUntil;

        return $this;
    }

    /**
     * Get lessonUntil
     *
     * @return \DateTime
     */
    public function getLessonUntil()
    {
        return $this->lessonUntil;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return lesson
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

