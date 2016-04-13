<?php

namespace MyApp\Model;

class Person
{
    const PG_MALE = 'mail';
    const PG_FEMAIL = 'femail';
    
    protected $name;
    protected $birthdate;
    protected $gender;
    
    public function __construct ($name, \DateTime $birtdate, $gender = self::PG_FEMALE)
    {
        $this->name = (string) $name;
        $this->birthdate = $birthdate;
        $this->gender = (string) $gender;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getBirthdate()
    {
        return $this->birthdate->format('Y-m-d');
    }
    
    public function getGender()
    {
        return $this->gender;
    }
}