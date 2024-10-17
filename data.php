<?php
class Data
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function database()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ajax";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
}
