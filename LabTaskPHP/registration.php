<?php

session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();
unset($_SESSION['errors']);

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisration</title>

    <style>
        h2{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    
    <h2>Registration Form</h2>
<center>
    <form action="validation.php" method="POST">
        <table>
            <tr>
                <td><label>Full Name: </label></td>
                <td><input type="text" name="name">
    
    <span style="color:red;">
        <?php echo isset($errors['name']) ? $errors['name'] : ""; ?>
    </span>
        </td>
            </tr>

            <tr>
                <td><label>Email: </label></td>
                <td><input type="email" name="email">
    <span style="color:red;">
        <?php echo isset($errors['email']) ? $errors['email'] : ""; ?>
    </span></td>
            </tr>

            <tr>
                <td><label>UserName: </label></td>
                <td><input type="text" name="username">
   
    <span style="color:red;">
        <?php echo isset($errors['username']) ? $errors['username'] : ""; ?>
    </span></td>
            </tr>

            <tr>
                <td><label>Password: </label></td>
                <td><input type="password" name="password">
   
    <span style="color:red;">
        <?php echo isset($errors['password']) ? $errors['password'] : ""; ?>
    </span></td>
            </tr>

            <tr>
                <td><label>Confirm Password: </label></td>
                <td> <input type="password" name="con_password">
    
    <span style="color:red;">
        <?php echo isset($errors['con_password']) ? $errors['con_password'] : ""; ?>
    </span></td>

            </tr>

            <tr>
                <td><label>Age: </label></td>
                <td> <input type="number" name="age">
 
    <span style="color:red;">
        <?php echo isset($errors['age']) ? $errors['age'] : ""; ?>
    </span></td>
            </tr>

            <tr>
                <td><label>Gender: </label></td>
                <td><input type="radio" name="Gender" value="Male">Male
    <input type="radio" name="Gender" value="Female">Female
   
    <span style="color:red;">
        <?php echo isset($errors['Gender']) ? $errors['Gender'] : ""; ?>
    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Course Selection: </label>
                </td>
                <td>
                     <select name="course">
        <option value="">Select Course</option>
        <option>Web Tech</option>
        <option>Software Engineering</option>
    </select>
   
    <span style="color:red;">
        <?php echo isset($errors['course']) ? $errors['course'] : ""; ?>
    </span></td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="Terms">Terms and Conditions
 
    <span style="color:red;">
        <?php echo isset($errors['Terms']) ? $errors['Terms'] : ""; ?>
    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="register">Register</button>
                </td>
            </tr>
            
        </table>
    </form>
    </center>
    
</body>
</html>