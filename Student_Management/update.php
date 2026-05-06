<?php
include 'db.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$department=$_POST['department'];

$sql="UPDATE students set name='$name', email='$email',department='$department' Where id=$id";

if(mysqli_query($conn,$sql))
    {
        echo "Updated Successfully";
    }
    else
        {
            echo "Error: " . mysqli_error($conn);
        }



?>