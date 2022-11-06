<?php

class ConnectDB
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;

        // class constructor
    public function __construct(
        $dbname = "iwp",
        $tablename = "essentials",
        $servername = "localhost",
        $username = "root",
        $password = "mysql"
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password,$dbname);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }
    }

    // get product from the database
    public function getEData(){
        $sql = "SELECT * FROM $this->tablename WHERE Product_Type='Hostel Essentials' ";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getSData(){
        $sql = "SELECT * FROM $this->tablename WHERE Product_Type='Stationery' ";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getAdata(){
        $sql = "SELECT * FROM $this->tablename ";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

}
