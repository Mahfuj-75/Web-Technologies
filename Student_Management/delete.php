<?php
include 'db.php';

$id=$_GET['id'];

$sql="DELETE from students where id=$id";

if(mysqli_query($conn, $sql))
    {
        echo "Deleted Successfully";

    }
    else
        {
            echo "Error: " . mysqli_error($conn);
        }



?>