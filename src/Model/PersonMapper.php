<?php

namespace Myapp\Model;

class PersonMapper
{
    /**
     * @var PersonGateway
     */
    protected $doa;
    
    /**
     * Constructor for PersonMapper
     *
     * @param PersonGateway $doa
     */
    public function __construct(PersonGateway $doa)
    {
        $this->doa = $doa;
    }
    
    /**
     * Find a person by provided name
     *
     * @param string $name
     * @return Person
     * @throws \DomainException
     */
    public function find($name)
    {
        if(false === ($resultSet = $this->doa->findByName($name))) {
            throw new \DomainException('No person found for name ' . $name);
        }
        return new Person(
            $resultSet['name'], 
            new \DateTime($resultSet['birthdate']),
            $resultset['gender']
        );
    }
}