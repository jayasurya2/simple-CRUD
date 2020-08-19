<?php
 include('header.php');
 include('connect.php');
?>

<form action='add.php' method='POST'>
 <label>Name</label>
 <input type='text' name='name'>
 <label>Info</label>
 <input type='text' name='info'>
 <input type='submit' name='submit' value='submit'>
</form>
