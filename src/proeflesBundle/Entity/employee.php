<?php

namespace proeflesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="proeflesBundle\Repository\employeeRepository")
 */
class employee
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
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var int
     *
     * @ORM\Column(name="street_number", type="integer")
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city_of_birth", type="string", length=255)
     */
    private $cityOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="country_of_birth", type="string", length=255)
     */
    private $countryOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="proeflesBundle\Entity\location")
     * @ORM\JoinColumn(name="station", referencedColumnName="id")
     */
    private $station;


    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="telephonenumber", type="string", length=255)
     */
    private $telephonenumber;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_birth", type="date")
     */
    private $dateOfBirth;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return employee
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return employee
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetNumber
     *
     * @param integer $streetNumber
     *
     * @return employee
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return int
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return employee
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return employee
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set cityOfBirth
     *
     * @param string $cityOfBirth
     *
     * @return employee
     */
    public function setCityOfBirth($cityOfBirth)
    {
        $this->cityOfBirth = $cityOfBirth;

        return $this;
    }

    /**
     * Get cityOfBirth
     *
     * @return string
     */
    public function getCityOfBirth()
    {
        return $this->cityOfBirth;
    }

    /**
     * Set countryOfBirth
     *
     * @param string $countryOfBirth
     *
     * @return employee
     */
    public function setCountryOfBirth($countryOfBirth)
    {
        $this->countryOfBirth = $countryOfBirth;

        return $this;
    }

    /**
     * Get countryOfBirth
     *
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->countryOfBirth;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set station
     *
     * @param integer $station
     *
     * @return employee
     */
    public function setStation($station)
    {
        $this->station = $station;

        return $this;
    }

    /**
     * Get station
     *
     * @return int
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return employee
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set telephonenumber
     *
     * @param string $telephonenumber
     *
     * @return employee
     */
    public function settelephonenumber($telephonenumber)
    {
        $this->telephonenumber = $telephonenumber;

        return $this;
    }

    /**
     * Get telephonenumber
     *
     * @return string
     */
    public function gettelephonenumber()
    {
        return $this->telephonenumber;
    }


    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return employee
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function __toString()
    {
        return $this->getId() . ' ' . $this->getFirstName() . ' ' . $this->getLastName();
    }
}

