<?php

require_once '../helpers/functions.php';

class Connection
{
    protected $link;

    private $host, $user, $pass, $db;

    public function __construct($host, $user, $pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->connect();
    }

    private function connect()
    {
        $this->link = new \mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function __sleep()
    {
        echo '__sleep is called!' . '<br>';
        return array('host', 'user', 'pass', 'db');
    }

    public function __wakeup()
    {
        echo '__wakeup is called!' . '<br>';
        $this->connect();
    }
}

$connection = new Connection('localhost', 'root', '', 'my_db');
debug($connection);
$serializedConnection = serialize($connection);
debug($serializedConnection);
$deSerializedConnection = unserialize($serializedConnection);
debug($deSerializedConnection);
