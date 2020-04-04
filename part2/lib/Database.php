<?php

/**
 * Class Database
 */
class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    public $link;
    public $error;

    /**
     * Database constructor.
     * @param array $db_details
     */
    public function __construct($db_details = [])
    {
        $this->host = $db_details['host'];
        $this->username = $db_details['username'];
        $this->password = $db_details['password'];
        $this->database = $db_details['database'];
        $this->link = $this->connection();
    }


    /**
     * @return mysqli|void
     */
    public function connection() {
        $link = new mysqli($this->host, $this->username, $this->password, $this->database);
        if (!$link) {
            return die('Connection Failed');
        } else {
            return $link;
        }
    }

    /**
     * @param $query
     * @return bool|mysqli_result
     */
    public function select($query) {
        $stmt = $this->link->query($query) or die($this->link->error);
        return $stmt;
    }


}