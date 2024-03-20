<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path-to-astra-css/astra.min.css">
    <style>
        .navbar {
            background-color: #007bff;
        }
        /* CSS style for the footer */
        footer {
            position: fixed;
            /* This will fix the position of footer */
            bottom: 0;
            /* This will fix the position of footer */
            width: 100%;
            background-color: #333;
            /* Change this to your desired background color */
            color: white;
            /* Change this to your desired text color */
            text-align: center;
            padding: 10px;
        }
        /* When Ever You Will Get So Many Feedback Then You Should remove this footer style */
        .button {
            margin-left: 460px;
            font-size: 30px;
            background-color: aliceblue;
            /* You can Give Background color for your form from here */
        }
        .div {
            height: 50px;
        }
        .test {
            margin-left: 70px;
        }
        .color {
            color: white;
            font-size: 30px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>
    <!-- Nav Bar Start -->
    <div>
        <nav class="navbar navbar-expand-lg ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-4">
                <span class="logo"><img src="./Images/logo2.png" alt="Image Not Found" height="50px" width="50px"> <a
                        href="index.php" class="color">Speed Test</a></span>
            </div>
            <div class="col-md-offset-5">
                <?php
                include_once 'dbConnection.php';
                session_start();
                $email = $_SESSION['email'];
                if (!(isset($_SESSION['email']))) {
                    header("location:index.php");
                } else {
                    $name = $_SESSION['name'];
                    include_once 'dbConnection.php';
                    echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true">
               </span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="#" class="log log1">' . $name . '</a>&nbsp; &nbsp;<a href="logout.php?student.php"log">
               &nbsp;<button class="btn btn-danger">Logout</button></a></span>';
                } ?>
            </div>
        </nav>
    </div>
    <!-- Nav bar End -->
    <!-- Navigation menu Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if (@$_GET['q'] == 1)
                        echo 'class="active"'; ?>><a href="student.php?q=1"><span
                                class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span
                                class="sr-only"></span></a></li>
                    <li <?php if (@$_GET['q'] == 2)
                        echo 'class="active"'; ?>><a href="student.php?q=2"><span
                                class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
                    <li <?php if (@$_GET['q'] == 3)
                        echo 'class="active"'; ?>><a href="student.php?q=3"><span
                                class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation menu closed -->
    <!--home start For Student -->
    <?php if (@$_GET['q'] == 1) {
        echo "<h3 class='text-center'>Available Tests</h3>";
        $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total Question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
        $c = 1;
        while ($row = mysqli_fetch_array($result)) {
            $title = $row['title'];
            $total = $row['total'];
            $correct = $row['correct'];
            $time = $row['time'];
            $eid = $row['eid'];
            $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
            $rowcount = mysqli_num_rows($q12);
            if ($rowcount == 0) {
                echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $correct * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="student.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;background:#2db44a; border-radius:0%"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;<span class="title1" name="start"><b>Start</b></span></a></b></td></tr>';
            } else {
                echo '<tr style="color:#2db44a"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This exam has been already solved by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $correct * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="update.php?q=quizre&step=25&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;background:#C82333; border-radius:0%"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1" name="start"><b>Restart</b></span></a></b></td></tr>';
            }
        }
        $c = 0;
        echo '</table></div>';
        ?>
        <!--home End For Student -->
        <!--  History Section Start  -->
        <?php if (@$_GET['q'] == 2) {
            $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ") or die('Error197');
            echo '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Exams</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
            $c = 0;
            while ($row = mysqli_fetch_array($q)) {
                $eid = $row['eid'];
                $s = $row['score'];
                $w = $row['wrong'];
                $r = $row['correct'];
                $qa = $row['level'];
                $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
                while ($row = mysqli_fetch_array($q23)) {
                    $title = $row['title'];
                }
                $c++;
                echo '<tr><td>' . $c . '</td><td>' . $title . '</td><td>' . $qa . '</td><td>' . $r . '</td><td>' . $w . '</td><td>' . $s . '</td></tr>';
            }
            echo '</table></div>';
        }
    }
    ?>
    <!-- History section End -->
    <!-- ranking Section start  -->
    <?php
    if (@$_GET['q'] == 3) {
        $q = mysqli_query($con, "SELECT * FROM rank  ORDER BY score DESC ") or die('Error223');
        echo '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Score</b></td></tr>';
        $c = 0;
        while ($row = mysqli_fetch_array($q)) {
            $e = $row['email'];
            $s = $row['score'];
            $q12 = mysqli_query($con, "SELECT * FROM register WHERE email='$e' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name = $row['name'];
                $lname = $row['lname'];
                $gender = $row['gender'];
                $college = $row['college'];
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name.' '.$lname.'</td><td>' . $s . '</td><td>';
        }
        echo '</table></div>';
    }
    ?>
    <!-- Ranking Section End -->
    <!-- Time Manegment Script Will Start Here -->
    <?php
include "dbconnection.php";
if ($con) {
    $eid = @$_GET['eid'];
    $query = "SELECT time FROM quiz WHERE eid = '$eid'";
    $result = mysqli_query($con, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $time = $row['time']; // Assuming time is in minutes
            $remaining_seconds = $time * 60; // Convert minutes to seconds
            echo "Remaining Time For Exam (ID: $eid) Is: <span id='timer'></span><br>";
            mysqli_free_result($result);
?>
            <script>
                // Set the remaining time in seconds
                let remainingTime = <?php echo $remaining_seconds; ?>;
                // Function to update the timer
                function updateTimer() {
                    let minutes = Math.floor(remainingTime / 60);
                    let seconds = remainingTime % 60;
                    // Display the remaining time
                    document.getElementById('timer').innerText = minutes + "m " + seconds + "s";
                    // Decrement remaining time by 1 second
                    remainingTime--;
                    // If time runs out, display a message and submit the form
                    if (remainingTime < 0) {
                        clearInterval(timerInterval);
                        document.getElementById('timer').innerText = "Time's up!";
                        finish_test();
                    }
                }
                // Call updateTimer function every second
                let timerInterval = setInterval(updateTimer, 1000);
                updateTimer(); // Call immediately to avoid 1-second delay in display
                // Function to submit the form when time runs out
                function finish_test() {
                    alert('Times Up So Test Is Submitted');
                    document.getElementById('submit').click(); // Submit the form
                }
            </script>
<?php
        } else {
            // echo "No rows found for exam ID: $eid in the quiz table.";
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Database connection failed.";
}
?>
    <!-- Time Manegment Script Will End Here -->
    <!--home End For Student-->
    <!--quiz start-->
    <?php
    if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
        $eid = @$_GET['eid'];
        $sn = @$_GET['n'];
        $total = @$_GET['t'];
        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
        echo '<div class="panel" style="margin:5%">';
        while ($row = mysqli_fetch_array($q)) {
            $qns = $row['qns'];
            $qid = $row['qid'];
            echo '<b>Question &nbsp;' . $sn . '&nbsp;:<br><br>' . $qns . ' <br>';
        }
        $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
        echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal" id="quizForm">
<br />';
        while ($row = mysqli_fetch_array($q)) {
            $option = $row['option'];
            $optionid = $row['optionid'];
            echo '<input type="radio" name="ans" value="' . $optionid . '"><b> ' . $option . ' </b><br><br>';
        }
        echo '<br /><button type="submit" id="submit" class="btn btn-primary" style="border-radius:0%"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
        // header("location:dash.php?q=4&step=2&eid=$eid&n=$total");
    }
    // Result Section start
    if (@$_GET['q'] == 'result' && @$_GET['eid']) {
        $eid = @$_GET['eid'];
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ") or die('Error157');
        echo '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
            $w = $row['wrong'];
            $r = $row['correct'];
            $qa = $row['level'];
            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>' . $qa . '</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>' . $r . '</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>' . $w . '</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
        }
        $q = mysqli_query($con, "SELECT * FROM rank WHERE  email='$email' ") or die('Error157');
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
            echo '<tr style="color:#990000"><td>Overall Rank &nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
        }
        echo '</table></div>';
    }
    ?>
    <!--quiz end-->
    <!-- History Section Start -->
    <?php
    if (@$_GET['q'] == 2) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ") or die('Error197');
        echo '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Exams</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
        $c = 0;
        while ($row = mysqli_fetch_array($q)) {
            $eid = $row['eid'];
            $s = $row['score'];
            $w = $row['wrong'];
            $r = $row['correct'];
            $qa = $row['level'];
            $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
            while ($row = mysqli_fetch_array($q23)) {
                $title = $row['title'];
            }
            $c++;
            echo '<tr><td>' . $c . '</td><td>' . $title . '</td><td>' . $qa . '</td><td>' . $r . '</td><td>' . $w . '</td><td>' . $s . '</td></tr>';
        }
        echo '</table></div>';
    }
    ?>
    <!-- History Section End -->
    </div>
    </div>
    </div>
    </div>
    <div class="div">
    </div>
    <!-- Page Footer Start -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Speed Test Pvt. Ltd.  All rights reserved.</p>
    </footer>
    <!-- Page Footer End -->
</body>
</html>