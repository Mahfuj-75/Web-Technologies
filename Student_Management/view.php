<?php

include 'db.php';

$result=mysqli_query($conn, "SELECT * from students");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Registration Number</th>
<th>Department</th>
</tr>";

while ($row =mysqli_fetch_assoc($result))
    {
        echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['registrationNo']}</td>
        <td>{$row['department']}</td>
        
        <td>
        <a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";

?>