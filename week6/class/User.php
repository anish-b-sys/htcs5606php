<?php

include_once "DB.php";
class User
{
    // They are my attributes
    public $id; //public friend private protect for a variable
    private $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username; //this means his
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    //They are my methods

    public function save(){
        $dbObject = new DB();
        $dbconn = $dbObject->connection;
        $sql = "insert into Users values (null, '$this->username', '$this->password', '$this->name')";
        $dbconn->query($sql);
        echo "saved to database";
    }

}