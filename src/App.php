<?php

namespace MyApp;

use MyApp\Model\PersonGateway;

use Pimple\Container;

class App
{
    /**
     * @var Container $di The Pimple DI container
     */
    protected $di;
    
    /**
     * Constructor for this App
     *
     * @param string $dsn
     */
    public function __construct($dsn)
    {
        $this->di = new Container();
        $this->di['personGateway'] = function ($c) use ($dsn) {
            return new PersonGateway(new \PDO($dsn));
        };
    }
    
    /**
     * Lists all persons in the database
     *
     * @return array
     */
    public function listPersons()
    {
        $pgw = $this->di['personGateway'];
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
        $pgw = $this->di['personGateway'];
        return $pgw->findByName($name);
    }
}