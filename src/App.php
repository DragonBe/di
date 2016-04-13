<?php

namespace MyApp;

use MyApp\Model\PersonGateway;

class App
{
    /**
     * @var \PDO $pdo The PHP Data Object
     */
    protected $pdo;
    
    /**
     * Constructor for this App
     *
     * @param string $dsn
     */
    public function __construct($dsn)
    {
        $this->pdo = new \PDO($dsn);
    }
    
    /**
     * Lists all persons in the database
     *
     * @return array
     */
    public function listPersons()
    {
        $pgw = new PersonGateway($this->pdo);
        return $pgw->fetchAll();
    }
    
    /**
     * Finds a person by name
     *
     * @param string $name
     * @return array
     */
    public function findPersonByName($name)
    {
        $pgw = new PersonGateway($this->pdo);
        return $pgw->findByName($name);
    }
}