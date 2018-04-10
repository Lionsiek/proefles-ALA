<?php

namespace proeflesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * appointment
 *
 * @ORM\Table(name="appointment")
 * @ORM\Entity(repositoryClass="proeflesBundle\Repository\appointmentRepository")
 */
class appointment
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
     * @ORM\Column(name="location", type="integer")
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="lesson_id", type="integer")
     */
    private $lessonId;

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
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepicker", type="date")
     */
    private $datepicker;


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
     * @return appointment
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
     * Set location
     *
     * @param integer $location
     *
     * @return appointment
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set lessonId
     *
     * @param integer $lessonId
     *
     * @return appointment
     */
    public function setLessonId($lessonId)
    {
        $this->lessonId = $lessonId;

        return $this;
    }

    /**
     * Get lessonId
     *
     * @return int
     */
    public function getLessonId()
    {
        return $this->lessonId;
    }

    /**
     * Set employee
     *
     * @param integer $employee
     *
     * @return appointment
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
     * @return appointment
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
     * Set comment
     *
     * @param string $comment
     *
     * @return appointment
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

    /**
     * Set datepicker
     *
     * @param \DateTime $datepicker
     *
     * @return appointment
     */
    public function setDatepicker($datepicker)
    {
        $this->datepicker = $datepicker;

        return $this;
    }

    /**
     * Get datepicker
     *
     * @return \DateTime
     */
    public function getDatepicker()
    {
        return $this->datepicker;
    }
}

