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
    
    public function fetchAll()
    {
        $sql = 'SELECT * FROM `' . self::tableName . '`';
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function findByName($name)
    {
        $sql = 'SELECT * FROM `' . self::tableName . '` WHERE `name` = ?';
        $stmt = $this->pdo->prepare()
        $stmt->execute(array ($name));
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}