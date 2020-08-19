<?php
 include('connect.php');

 if($_POST)    /// if post method came
 {
  if($_POST['submit'])    // if post method came with the name of submit
  {
   $name= $_POST['name'];
   $info=$_POST['info'];

   $sql = "INSERT INTO users (name , info) VALUES ('".$name."', '".$info."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
   }
  }
?>
<form>
<a href="./"><input type= 'button' value='Go back'></a>
</form>