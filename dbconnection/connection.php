<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="dams";
 $conn= new Mysqli($servername,$username,$password,$database);
 if ($conn->connect_error) {
 	die("Connection failed".$conn->connect_error);
 }
 ?>