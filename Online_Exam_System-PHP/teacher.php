<!-- This File Contains a Backend Code Related To Add Teacher Functionality -->
<?php
include_once 'dbConnection.php';
$name=$_POST['name'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$name = stripslashes($name);
$name = addslashes($name);
$lname = stripslashes($lname);
$lname = addslashes($lname);
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);
$cpassword= stripslashes($cpassword);
$cpassword= addslashes($cpassword);
// Check The add Teacher Functionality because you haven't check it after adding folowing validation .
if ($password !== $cpassword) {
    echo '<script>alert("Password Is Not Matched 😑 Please Enter Same Password"); window.location.href = document.referrer;</script>';
    exit;
}
$q3=mysqli_query($con,"INSERT INTO teacher VALUES  ('$name' , '$lname' ,'$email' , '$password','$cpassword')");
if($q3)
{
    echo '<script>alert("Teacher Added Successfully 😇..!"); window.location.href = document.referrer;</script>';
    exit;
// header("location:dash.php?q=5");
}
?>