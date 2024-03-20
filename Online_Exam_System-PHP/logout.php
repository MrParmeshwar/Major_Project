<!-- This File Handle The Code Regarding Logout Functionality -->
<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:index.php");
?>