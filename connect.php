<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, "crud");
 
 // Check connection
 if ($conn->connect_error) {
   echo "Connection failed";
 }
 else
 {
   echo "Connected successfully!!!!!";
 }
 ?>

