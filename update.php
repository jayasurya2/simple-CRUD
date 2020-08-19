<?php
include('connect.php'); 
include('header.php'); 
echo "new page!!";
$id = $_POST['id'];
$name = $_POST['name'];
$info = $_POST['info'];

$sql = "UPDATE users SET name='hhh' WHERE id = ".$id;
  if($conn->query($sql))
  {
     echo "Updated Successfully"; 
  }
  else{
       echo "Updation failed";
      }  

?>