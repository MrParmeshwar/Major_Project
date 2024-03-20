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
            /* position: fixed; */
            /* This will fix the position of footer */
            bottom: 0;
            /* This will fix the position of footer */
            width: 100%;
            left: 0;
            background-color: #333;
            /* Change this to your desired background color */
            color: white;
            /* Change this to your desired text color */
            text-align: center;
            padding: 50px;
        }
        /* When Ever You Will Get So Many Feedback Then You Should remove this footer style */
        .button {
            margin-left: 460px;
            font-size: 30px;
            background-color: aliceblue;
            /* You can Give Background color for your form from here */
        }
        .div {
            width: 200px;
            /* Set your desired width */
            height: 550px;
            /* Set your desired height */
            /* border: 1px solid #ccc; */
            /* Optional: Add a border for better visualization */
            /* padding: 10px; */
            /* Optional: Add padding for spacing inside the div */
            /* box-sizing: border-box; */
            /* Optional: Include padding and border in the total width and height */
        }
        .demo {
            background-color: red;
            /* This is testing css class */
        }
        .color {
            color: white;
            font-size: 30px;
        }
        .glyphicon-pencil::before {
      text-decoration: underline;
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
      
            <div class="col-lg-4">
                <span class="logo"> <img src="./Images/logo2.png" alt="Image Not Found" height="50px" width="50px"> <a
                        href="index.php" class="color">Speed Test </a></span>
            </div>
            <div class="col-md-offset-5">
                <!-- Don't Uncomment following code until the Applying Authentication -->
                <?php
                include_once 'dbConnection.php';
                session_start();
                $email = $_SESSION['email'];
                if (!(isset($_SESSION['email']))) {
                    header("location:index.php");
                } else {
                    $name = $_SESSION['name'];
                    echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true">
               </span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="#" class="log log1">' . $name . '</a>&nbsp; &nbsp;<a href="#"log">
               &nbsp;<a  href="logout.php?q=Dashboard.php" ><button class="btn btn-danger">Logout</button></a></span>';
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
            <div class="navbar-nav">
                <ul class="nav navbar-nav">
                    <li <?php if (@$_GET['q'] == 0)
                        echo 'class="active"'; ?>><a href="dash.php?q=0">Home<span
                                class="sr-only">(current)</span></a></li>
                    <li <?php if (@$_GET['q'] == 1)
                        echo 'class="active"'; ?>><a href="dash.php?q=1">Students</a></li>
                    <li <?php if (@$_GET['q'] == 2)
                        echo 'class="active"'; ?>><a href="dash.php?q=2">Students Rankings</a>
                    </li>
                    <li <?php if (@$_GET['q'] == 3)
                        echo 'class="active"'; ?>><a href="dash.php?q=3">Feedback</a></li>
                    <li <?php if (@$_GET['q'] == 4)
                        echo 'class="active"'; ?>><a href="dash.php?q=4">Add Exams</a></li>
                    <li <?php if (@$_GET['q'] == 5)
                        echo 'class="active"'; ?>><a href="dash.php?q=5">Add Teacher</a></li>
                    <li <?php if (@$_GET['q'] == 6)
                        echo 'class="active"'; ?>><a href="dash.php?q=6">Update Exam</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation menu closed -->
    <!-- Container Start  -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--home start-->
                <?php if (@$_GET['q'] == 0) {
                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $correct = $row['correct'];
                        $time = $row['time'];
                        $eid = $row['eid'];
                        echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $correct * $total . '</td><td>' . $time . '&nbsp;min</td>
<td><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="pull-right btn btn-danger" style="margin:0px; border-radius:0%;"><span class="glyphicon glyphicon-trash"  aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';
                }
                //ranking start
                if (@$_GET['q'] == 2) {
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
                        echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name .' '.$lname.'</td><td>' . $s . '</td><td>';
                    }
                    echo '</table></div>';
                }
                ?>
                <!--home closed-->
                <!--Students start-->
                <?php if (@$_GET['q'] == 1) {
                    $result = mysqli_query($con, "SELECT * FROM register") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $lname = $row['lname'];
                        $mob = $row['mob'];
                        $gender = $row['gender'];
                        $email = $row['email'];
                        $college = $row['college'];
                        echo '<tr><td>' . $c++ . '</td><td>' . $name .' '.$lname. '</td><td>' . $gender . '</td><td>' . $college . '</td><td>' . $email . '</td><td>' . $mob . '</td>
<td><a title="Delete User" href="update.php?demail=' . $email . '"><b><span class="glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></b></a></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';
                } ?>
                <!--Students end-->
                <!--feedback start-->
                <?php if (@$_GET['q'] == 3) {
                    $result = mysqli_query($con, "SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $date = $row['date'];
                        $date = date("d-m-Y", strtotime($date));
                        $time = $row['time'];
                        $subject = $row['subject'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $id = $row['id'];
                        echo '<tr><td>' . $c++ . '</td>';
                        echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid=' . $id . '">' . $subject . '</a></td><td>' . $email . '</td><td>' . $date . '</td><td>' . $time . '</td><td>' . $name . '</td>
	<td><a title="Open Feedback" href="dash.php?q=3&fid=' . $id . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
                        echo '<td><a title="Delete Feedback" href="update.php?fdid=' . $id . '"><b><span class="glyphicon glyphicon-trash" style="color:red;" aria-hidden="true"></span></b></a></td>
	</tr>';
                    }
                    echo '</table></div>';
                }
                ?>
                <!--feedback closed-->
                <!--feedback reading portion start-->
                <?php if (@$_GET['fid']) {
                    echo '<br />';
                    $id = @$_GET['fid'];
                    $result = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id' ") or die('Error');
                    while ($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $subject = $row['subject'];
                        $date = $row['date'];
                        $date = date("d-m-Y", strtotime($date));
                        $time = $row['time'];
                        $feedback = $row['feedback'];
                        echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $subject . '</b></h1>';
                        echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;' . $date . '</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;' . $time . '</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;' . $name . '</span><br />' . $feedback . '</div></div>';
                    }
                } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div>
                <!--add quiz start-->
                <?php
                if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
                    echo '
    <div class="container">
        <div class="">
            <span class="title1" style="font-size: 30px; margin-left:40%;"><b>Enter Exam Details</b></span><br /><br />
            <div class="col-md-3"></div>
            <div class="col-md-8"> 
                <form id="form1" class="form-horizontal title1" name="form" action="update.php?q=addquiz" method="POST">
                    <fieldset>
<!-- Text input-->
<div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="name" name="name" placeholder="Enter Exam Title" class="form-control input-md" type="text" required>
                            </div>
                        </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Write description here..." required></textarea>  
  </div>
</div>
<div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Next" style="margin-left: 40%" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>';
                }
                ?>
                <!--add quiz end-->
                <!-- Second Form For Question -->
                <?php
                if (@$_GET['q'] == 4) {
                    echo ' 
<div class="">
<b class="button" >Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"><form id="form2" class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4 "  method="POST">
<fieldset>
';
                    for ($i = 1; $i <= @$_GET['n']; $i++) {
                        echo '<b>Question number&nbsp;' . $i . '&nbsp;:</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Write question number ' . $i . ' here..." required></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '1"></label>  
  <div class="col-md-12">
  <input id="' . $i . '1" name="' . $i . '1" placeholder="Enter option a" class="form-control input-md" type="text" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '2"></label>  
  <div class="col-md-12">
  <input id="' . $i . '2" name="' . $i . '2" placeholder="Enter option b" class="form-control input-md" type="text" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '3"></label>  
  <div class="col-md-12">
  <input id="' . $i . '3" name="' . $i . '3" placeholder="Enter option c" class="form-control input-md" type="text" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '4"></label>  
  <div class="col-md-12">
  <input id="' . $i . '4" name="' . $i . '4" placeholder="Enter option d" class="form-control input-md" type="text" required>
  </div>
</div>
<br />
<b>Correct answer</b>:<br />
<select id="ans' . $i . '" name="ans' . $i . '" placeholder="Choose correct answer " class="form-control input-md" required>
   <option value="">Select answer for question ' . $i . '</option>
  <option value="a">Option a</option>
  <option value="b">Option b</option>
  <option value="c">Option c</option>
  <option value="d">Option d</option> </select><br /><br />';
                    }
                    echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:54%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
    <div class="demo">
    </div>
  </div>
</div>
</fieldset>
</form></div>';
                }
                ?>
                <!-- Add Teacher Start -->
                <?php
                if (@$_GET['q'] == 5 && !(@$_GET['step'])) {
                    echo '
        <div class="div container">
            <div class="">
                <span class="title1" style="font-size: 30px; margin-left:40%;"><b>Enter Teacher Details</b></span><br /><br />
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <div>
                        <form action="teacher.php" method="post">
                            <!-- Email Field -->
                            <div class="mb-3">
                                <label  class="form-label">First Name</label>
                                <input type="text" class="form-control" name="name" id="firstname" placeholder="Enter Teacher\'s First Name" required>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lastname" placeholder="Enter Teacher\'s Last Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                            </div>
                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter 8 Digit password" required minlength="8">
                            </div>
                            <!-- Confirm Password Field -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" id="confirmPassword" placeholder="Confirm password" required minlength="8">
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary" style="margin-left:40%" name="add_teacher"  >Add Teacher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>';
                }
                ?>
                <!-- Add Teacher End -->
                <!-- Update Exam Start -->
                <?php if (@$_GET['q'] == 6) {
                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $correct = $row['correct'];
                        $time = $row['time'];
                        $eid = $row['eid'];
                        echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $correct * $total . '</td><td>' . $time . '&nbsp;min</td>
<td><b><a href="examupdate.php?' . "eid=" . $eid . '" class="glyphicon glyphicon-pencil btn btn-warning" style="margin:0px; border-radius:0%;"></span>&nbsp;<span class="title1"><b>Update</b></span></a></b></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';
                }
                ?>
                <!-- Update Exam End -->
            </div>
        </div>
    </div>
    </div>
    <div class="demo">
        <!-- This div will create exrtra space -->
    </div>
    <!-- Containder End -->
    <!-- Page Footer Start -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Speed Test Pvt. Ltd.  All rights reserved.</p>
    </footer>
    <!-- Page Footer End -->
</body>
</html>