<?php

namespace MyApp;

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
        $resultSet = $this->pdo->query('SELECT * FROM `person`');
        return $resultSet->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    /**
     * Finds a person by name
     *
     * @param string $name
     * @return array
     */
    public function findPersonByName($name)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `person` WHERE `name` = ?');
        $stmt->execute(array ($name));
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}