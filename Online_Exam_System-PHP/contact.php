<?php
include_once 'dbConnection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = $email = $message = "";
$nameerror = $emailerror = $msgerror = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
    } else {
        $name = test_input($_POST['name']);
    }
    if (empty($_POST["email"])) {
        $emailerror = "Email is required";
    } else {
        $email = test_input($_POST['email']);
    }
    if (empty($_POST["message"])) {
        $msgerror = "Message can't be empty";
    } else {
        $message = test_input($_POST['message']);
    }
    // Check if there are no errors before inserting into the database
    if (empty($nameerror) && empty($emailerror) && empty($msgerror)) {
        // Insert data into the database here
        $q3 = mysqli_query($con, "INSERT INTO contact VALUES  ('$name'  ,'$email' , '$message')");
        if ($q3) {
            echo "<script>alert('Thank You For Contacting Us 😇..!'); window.location.href = document.referrer;</script>";
        } else {
            echo "<script>alert('Error Occured ..! Please Fill The Form Again')></script>";
        }
    } else {
        echo "<script>alert('Please fill all fields'); window.location.href = document.referrer;</script>";
    }
}
// Function to sanitize and validate input data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>