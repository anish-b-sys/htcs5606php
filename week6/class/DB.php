<?php

class DB
{
    private $server = "dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "frn8ql19w9jrd0hy";
    private $pwd = "uvsw3rnopxb2uxq2";
    private $database = "eq8apmg97080j54s";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }
}