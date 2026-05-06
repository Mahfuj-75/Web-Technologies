<?php

include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$regis=$_POST['registrationNo'];
$dept=$_POST['department'];

$sql="INSERT INTO registration (name,email, registration, department)
VALUES ('$name','$email','$regis','$dept')";

if(mysqli_query($conn, $sql))
    {
        echo "Student Added Successfully";

    }
    else
        {
            echo "Error: ". mysqli_error($conn);
        }

?>