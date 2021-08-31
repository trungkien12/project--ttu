<?php

class DB  {
    public $con;
    protected $severname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "project--dhtt";

    // protected $severname = "sql100.epizy.com";
    // protected $username = "epiz_29580270";
    // protected $password = "HAEnZivr47rce";
    // protected $dbname = "epiz_29580270_DHTT";

    function __construct()
    {
        $this->con = mysqli_connect($this->severname, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
        // if($this->con){
        //     echo "connect is successfully";
        // }
    }
}

?>