<?php

namespace MyApp\Model

class PersonGateway
{
    protected $pdo;
    protected $tableName = 'person';
    
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function findByName($name)
    {
        $sql = 'SELECT * FROM `' . self::tableName . '` WHERE `name` = ?';
        $stmt = $this->pdo->prepare()
        $result = $stmt->execute(array ($name));
        return $result;
    }
}