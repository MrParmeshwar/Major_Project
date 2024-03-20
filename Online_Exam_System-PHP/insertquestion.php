<?php
include_once("dbConnection.php");
// Start session
session_start();
$p=0;
// Add question
if(isset($_SESSION['key']) && $_SESSION['key'] == 'sunny7785068889') {
    if(isset($_GET['q']) && $_GET['q'] == 'addqns') {
        // Get parameters
        $n = @$_GET['qn'];
        $eid = @$_GET['eid'];
        $ch = @$_GET['ch'];
        $sn = @$_GET['n'];
        $add = $n + $sn;
        // Loop through questions
        for($i = $sn; $i < $add; $i++) {
            // Increment $a
            $p++;
            // Generate unique ID for question
            $qid = uniqid();
            // Insert question into database
            $qns = $_POST['qns'.$p];
            $q3 = mysqli_query($con, "INSERT INTO questions VALUES ('$eid', '$qid', '$qns', '$ch', '$i')") or die('Error: Failed to insert question');
            // Insert options into database
            $oaid = uniqid();
            $obid = uniqid();
            $ocid = uniqid();
            $odid = uniqid();
            $a = $_POST[$p.'1'];
            $b = $_POST[$p.'2'];
            $c = $_POST[$p.'3'];
            $d = $_POST[$p.'4'];
            $qa = mysqli_query($con, "INSERT INTO options VALUES ('$qid', '$a', '$oaid')") or die('Error: Failed to insert option A');
            $qb = mysqli_query($con, "INSERT INTO options VALUES ('$qid', '$b', '$obid')") or die('Error: Failed to insert option B');
            $qc = mysqli_query($con, "INSERT INTO options VALUES ('$qid', '$c', '$ocid')") or die('Error: Failed to insert option C');
            $qd = mysqli_query($con, "INSERT INTO options VALUES ('$qid', '$d', '$odid')") or die('Error: Failed to insert option D');
            // Determine correct answer
            $e = $_POST['ans'.$p];
            switch($e) {
                case 'a':
                    $ansid = $oaid;
                    break;
                case 'b':
                    $ansid = $obid;
                    break;
                case 'c':
                    $ansid = $ocid;
                    break;
                case 'd':
                    $ansid = $odid;
                    break;
                default:
                    $ansid = $oaid;
            }
            // Insert correct answer into database
            $qans = mysqli_query($con, "INSERT INTO answer VALUES ('$qid', '$ansid')") or die('Error: Failed to insert answer');
        }
        // Redirect to dashboard after adding questions
        header("location: dash.php?q=6");
        exit();
    }
}
?>
