<?php

class University
{
    public $universityName;
    public $universityAddress;
    public $licenseNo;

    function __construct($universityName, $universityAddress, $licenseNo)
    {
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenseNo = $licenseNo;
    }

    function printUniversityDetails()
    {
        echo "University Name : $this->universityName" . PHP_EOL;
        echo "University Address : $this->universityAddress" . PHP_EOL;
        echo "University License : $this->licenseNo" . PHP_EOL;
    }
}
