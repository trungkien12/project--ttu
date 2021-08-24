<?php

class DB  {
    public $con;
    protected $severname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "project--ttu";

    function __construct()
    {
        $this->con = mysqli_connect($this->severname, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        if($this->con){
            echo "connect is successfully!";
        }
    }
}

?>