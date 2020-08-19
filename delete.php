<?php
 include('connect.php'); 
 include('header.php'); 
 echo "hello!!!";
 var_dump($_POST);
 $id = $_POST['id'];
 $sql = "DELETE FROM users WHERE id =" .$id;

 if($conn->query($sql))
  {
     echo "Deleted Successfully"; 
  }
  else{
       echo "Error in deleting record";
      } 
 
 ?>
