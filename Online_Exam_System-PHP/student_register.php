<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$lname= $_POST['lname'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$c_pass=$_POST['cpassword'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$mob = stripslashes($mob);
$mob = addslashes($mob);
$password = stripslashes($password);
$password = addslashes($password);
//$password = md5($password);
$c_pass = stripslashes($c_pass);
$c_pass = addslashes($c_pass);
//$c_pass= md5($c_pass);
if ($password !== $c_pass) {
    echo '<script>alert("Password Is Not Matched . Please Enter Same Password"); window.location.href = document.referrer;</script>';
    exit;
}
$q3=mysqli_query($con,"INSERT INTO register VALUES  ('$name' ,'$lname' , '$gender' , '$college','$email' ,'$mob', '$password','$c_pass')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
header("location:student.php?q=1");
}