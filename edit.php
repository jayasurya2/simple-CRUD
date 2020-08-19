<?php
    include('connect.php');
    include('header.php');
    $id = $_GET['id'];
    $sql = "SELECT * from users WHERE id = ".$id;
    $result = $conn->query($sql);
    $value = $result->fetch_array();
?>

<form action='update.php' method='POST'>
 <label>Name</label>
 <input type='text' name='name' value = "<?php echo $value['name'];?>" />
 <label>Info</label>
 <input type='text' name='info' value = "<?php echo $value['info']; ?>" />
 <input type='hidden' name='id' value = "<?php echo $id; ?>" />
 <input type='submit' name='submit' value='UPDATE' />
</form>

