<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['uname'];
$password = $_POST['password'];
$result = mysqli_query($con,"SELECT name FROM teacher WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["key"] ='sunny7785068889';
$_SESSION["email"] = $email;
header("location:teacher_dash.php?q=0");
}
else
header("location:$ref?w=Wrong Username or Password");
?>