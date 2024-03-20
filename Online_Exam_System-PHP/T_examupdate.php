<?php
// if(!isset($_SESSION["key"])){
//     header("Location: Dashboard.php");
// }
include("dbConnection.php");
if (isset($_POST["updateExam"])) {
    $title = $_POST['title'];
    $correct = $_POST['correct'];
    $wrong = $_POST['wrong'];
    $total = $_POST['total'];
    $time = $_POST['time'];
    $examid = $_GET['eid']; // Retrieve exam ID from the URL parameter
    $query = "UPDATE quiz SET title='$title', correct='$correct', wrong='$wrong', total='$total', time='$time' WHERE eid='$examid'";
    // Execute the query
    $result = mysqli_query($con, $query);
    if ($result) {
        header("Location: T_updatequestion.php?eid=$examid");
        exit();
    } else {
        echo "Error updating exam details: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Astra theme CSS (replace 'path-to-astra-css' with the actual path) -->
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
            margin-left: 180px;
            /* font-size: 30px;
            background-color: aliceblue; */
            /* You can Give Background color for your form from here */
        }
        .div {
            width: 200px;
            /* Set your desired width */
            height: 50px;
            /* Set your desired height */
            /* border: 1px solid #ccc; */
            /* Optional: Add a border for better visualization */
            /* padding: 10px; */
            /* Optional: Add padding for spacing inside the div */
            /* box-sizing: border-box; */
            /* Optional: Include padding and border in the total width and height */
        }
        .demo {
            /* background-color: red; */
            padding-left: 450px;
            /* margin-left: 450px; */
        }
        .color {
            color: white;
            font-size: 30px;
        }
        .glyphicon-pencil::before {
            text-decoration: underline;
        }
        h3 {
            text-align: center;
        }
        /* .back{
            margin-left: 10px;
        } */
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
                <!-- Don't Uncomment following code until the Applying Authentication -->
                <?php
                include_once 'dbConnection.php';
                session_start();
                $email = $_SESSION['email'];
                if (!(isset($_SESSION['email']))) {
                    header("location:index.php");
                } else {
                    $name = $_SESSION['name'];
                    // echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Hello,</span> <a href="#" class="log log1">' . $name.'</a><a href="logout.php?q=Dashboard.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true" onclick="alert("Database Is Not Connected")></span>&nbsp;Logout</button></a></span>';
                    echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true">
               </span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="#" class="log log1">' . $name . '</a>&nbsp; &nbsp;<a href="#"log">
               &nbsp;<a  href="logout.php?q=Dashboard.php" ><button class="btn btn-danger">Logout</button></a></span>';
                    // echo '<span class="pull-right top title1"><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Hello,</span><a href="#" class="log log1">' . $name . '</a><a href="logout.php?q=Dashboard.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true" onclick="alert(\'Database Is Not Connected\')"></span>&nbsp;Logout</button></a></span>';
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
                        echo 'class="active"'; ?>><a href="teacher_dash.php?q=0">Home<span
                                class="sr-only">(current)</span></a></li>
                    <li <?php if (@$_GET['q'] == 1)
                        echo 'class="active"'; ?>><a href="teacher_dash.php?q=1">Students</a>
                    </li>
                    <li <?php if (@$_GET['q'] == 2)
                        echo 'class="active"'; ?>><a href="teacher_dash.php?q=2">Students
                            Rankings</a>
                    </li>
                    <li <?php if (@$_GET['q'] == 3)
                        echo 'class="active"'; ?>><a href="teacher_dash.php?q=3">Feedback</a>
                    </li>
                    <li <?php if (@$_GET['q'] == 4)
                        echo 'class="active"'; ?>><a href="teacher_dash.php?q=4">Add Exam</a>
                    </li>
                    <li <?php if (@$_GET['q'] == 5)
                        echo 'class="active"'; ?>><a href="teacher_dash.php?q=5">Update Exams</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation menu closed -->
    <div class="demo">
        <?php
        // Assuming you have a database connection established already
        include("dbConnection.php");
        // Check if the 'eid' parameter is set in the URL
        if (isset($_GET['eid'])) {
            // Retrieve the exam ID from the URL parameter
            $examid = $_GET['eid'];
            // Prepare the SQL query with a placeholder for the exam ID
            $query = "SELECT * FROM quiz WHERE eid = ?";
            // Prepare the statement
            $stmt = mysqli_prepare($con, $query);
            // Bind the exam ID parameter to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $examid);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Get the result
            $result = mysqli_stmt_get_result($stmt);
            // Check if the query was successful
            if ($result) {
                // Fetch the exam details as an associative array
                $exam_details = mysqli_fetch_assoc($result);
                ?>
                <form action="" method="post">
                    <!-- Input fields to display exam details with Bootstrap -->
                    <div class="container mt-5">
                        <div class=" ">
                            <div class="col-md-6">
                                <div>
                                    <h3>*<strong> Update Exam Details </strong>*</h3>
                                </div>
                                <label for="title" class="form-label">Exam Title:</label>
                                <input type="text" id="title" name="title" value="<?php echo $exam_details['title']; ?>"
                                    class="form-control input-md">
                                <br>
                                <label for="total" class="form-label">Total Questions:</label>
                                <input type="number" id="total" name="total" value="<?php echo $exam_details['total']; ?>"
                                    class="form-control">
                                <br>
                                <label for="correct" class="form-label">Correct Marks:</label>
                                <input type="number" id="correct" name="correct" value="<?php echo $exam_details['correct']; ?>"
                                    class="form-control">
                                <br>
                                <label for="wrong" class="form-label">Minus Mark:</label>
                                <input type="number" id="wrong" name="wrong" value="<?php echo $exam_details['wrong']; ?>"
                                    class="form-control">
                                <br>
                                <label for="time" class="form-label">Time:</label>
                                <input type="number" id="time" name="time" value="<?php echo $exam_details['time']; ?>"
                                    class="form-control">
                                <div>
                                    <button type="submit" class="button mt-4 btn btn-success" name="updateExam"
                                        id="updateBtn">Update</button>
                                    <button class="btn btn-secondary mt-4" onclick="goBack()"> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
            } else {
                echo "Error fetching exam details: " . mysqli_error($con);
            }
        } else {
            echo "Exam ID not provided";
        }
        ?>
    </div>
    <div class="div">
        <!-- Following Script Is Used For Back Button -->
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
    <!-- Page Footer Start -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Speed Test Pvt. Ltd.  All rights reserved.</p>
    </footer>
    <!-- Page Footer End -->
</body>
</html>