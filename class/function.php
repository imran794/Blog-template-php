<?php



  class adminblog{


  	   private $conn;

       public function___construct()
       {

       	  #database host , database user, database pass, database name

       	  $dbhost = 'localhost';
       	  $dbuser = 'root';
       	  $dbpass = '';
       	  $dbname = 'blogproject';


       	  $this->conn = mysql_connect($dbhost,$dbuser,$dbpass,$dbname);

       	  if (!$this->conn) {
       	  	die('Database connection Error!!');
       	  }

       }

  }





?>