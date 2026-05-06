<?php
include 'db.php';

$id=$_GET['id'];

$result=mysqli_query($conn, "SELECT * from students where id=$id");
$data =mysqli_fetch_assoc($result);
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
    Department: <input type="text" name="department" value="<?php echo $data['department']; ?>"><br>

    <button type="submit">Update</button>
</form>