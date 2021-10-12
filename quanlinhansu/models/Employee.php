<?php
class Employee{
    public string $firstName;
    public string $lastName;
    public string $birthDate;
    public string $address;
    public string $jobTitle;

    /**
     * @param $firstName
     * @param $lastName
     * @param $birthDate
     * @param $address
     * @param $jobTitle
     */
    public function __construct($firstName, $lastName, $birthDate, $address, $jobTitle)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->jobTitle = $jobTitle;
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getBirthDate(): string
    {
        return $this->birthDate;
    }


    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }


    public function getAddress(): string
    {
        return $this->address;
    }


    public function setAddress($address): void
    {
        $this->address = $address;
    }


    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }


    public function setJobTitle($jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    public function getFullName(): string
    {
        return $this->firstName ." ". $this->lastName;
    }

}
