<?php
session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$con_password=$_POST['con_password'];
$age=$_POST['age'];
$gender=isset($_POST['Gender']) ? $_POST['Gender']: "";
$terms=isset($_POST['Terms']);

$course=isset($_POST['course']) ? $_POST['course']: "";
$errors=array();


  /* if(empty($name) || empty($email) || empty($username) || empty($password) || empty($con_password) || empty($age))
    {
        $errors[]="All fields must not be empty";
    }

    if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $errors[]="name must contain letters and spaces";
        }
    
    if(strlen($username)<5)
        {
            $errors[]="username must be at least 5 characters";
        }

        if (strlen($password)<6)
            {
                $errors[]="password must be at least 6 characters";
            }

        if($password!==$con_password)
            {
                $errors[]="password do not match";
            }
        if($age<18)
            {
                $errors[]="Age must be 18";
            }
        if(empty($course))
            {
                $errors[]="please select a course";
            }
        if(!$terms)
            {
                $errors[]="you must click terms and conditions";
            }
        if(!empty($errors))
            {
                echo "<h3 style='color:red;'>Errors:</h3>";
                foreach($errors as $e)
                    {
                        echo $e . "<br>";
                    }
            }
            if(isset($_POST['register']))
                {

                }

        else
            {
                echo "<h2 style='color:green;'>Registration Successfully</h2>";
                echo "Name: $name <br>";
                echo "Email: $email <br>";
                echo "Username: $username <br>";
                echo "Age: $age <br>";
                echo "Gender: $gender <br>";
                echo "Course: $course <br>";
            } */















if(empty($name)){
    $errors['name'] = "Required";
}
elseif(!preg_match("/^[a-zA-Z ]*$/",$name)){
    $errors['name'] = "Only letters & spaces";
}


if(empty($email)){
    $errors['email'] = "Required";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Invalid email";
}

if(empty($username)){
    $errors['username'] = "Required";
}
elseif(strlen($username) < 5){
    $errors['username'] = "Min 5 characters";
}


if(empty($password)){
    $errors['password'] = "Required";
}
elseif(strlen($password) < 6){
    $errors['password'] = "Min 6 characters";
}


if(empty($con_password)){
    $errors['con_password'] = "Required";
}
elseif($password !== $con_password){
    $errors['con_password'] = "Not matched";
}


if(empty($age)){
    $errors['age'] = "Required";
}
elseif($age < 18){
    $errors['age'] = "Must be 18+";
}

if(empty($gender)){
    $errors['Gender'] = "Required";
}


if(empty($course)){
    $errors['course'] = "Required";
}

if(!$terms){
    $errors['Terms'] = "Required";
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header("Location: registration.php");
    exit();
}
else{
    echo "<h2 style='color:green;'>Registration Successful!</h2>";
}
?>