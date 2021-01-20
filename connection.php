<?php

$host = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "ecommerce";


   $connection = mysqli_connect($host,$dbuser,$dbpass,$dbname);

   if($connection==false){
   	echo "db connection problem";
   }    
?>