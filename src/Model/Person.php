<?php

namespace Myapp\Model;

class Person
{
    const P_GENDER_M = 'male';
    const P_GENDER_F = 'female';

    /**
     * @var string $name The name of this person
     */
    protected $name;
    /**
     * @var \DateTime $birthdate The birthdate of this person
     */
    protected $birthdate;
    /**
     * @var string $gender The gender of this person
     */
    protected $gender;
    
    /**
     * Constructor for Person class
     *
     * @param string $name
     * @param \DateTime $birthdate
     * @param string $gender
     */
    public function __construct($name, \DateTime $birthdate, $gender = self::P_GENGER_F)
    {
        $this->name = (string) $name;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }
}