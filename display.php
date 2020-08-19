<?php
    include('connect.php');
    include('header.php');

    $sql = "SELECT * from users";
    $result = $conn->query($sql);
?>
<html>
    <head>
        <style>
        table
        {
        border-style:solid;
        border-width:1px;
        border-color:black;
        }
        </style>
    </head>
    <body>
        <table border='1'>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Info</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>

            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['name']  ?></td>
                    <td><?php echo $row['info']  ?></td>
                    <td><?php echo date("d-m-y", strtotime($row['created_at'])) ?></td>
                    <td>
                        <a href="./edit.php?id=<?php echo $row['id'] ?>">Edit </a>
                        <form action="delete.php" method="POST">
                            <input type='hidden' name='id' value = "<?php echo $row['id']; ?>" />
                            <input type="submit" onclick="return confirm('Are you sure you want to delete this item')" value="DELETE">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php $conn->close(); ?>
    </body>
 </html>
 