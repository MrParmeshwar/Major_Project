<?php
// Include the file containing the database connection code
include("dbConnection.php");
function getSelectedAnswer($con, $question_id)
{
    $query = "SELECT options.option FROM answer INNER JOIN options ON answer.ansid = options.optionid WHERE answer.qid = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $question_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($result && mysqli_num_rows($result) > 0) {
        $answer_data = mysqli_fetch_assoc($result);
        return $answer_data['option'];
    }
    return null;
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'qid' parameter is set in the form data
    if (isset($_POST['qid'])) {
        // Retrieve the question ID from the form data
        $question_id = $_POST['qid'];
        // Retrieve the updated question text from the form data
        $updated_question = $_POST['qns'];
        // Prepare the SQL query to update the question text in the database
        $update_question_query = "UPDATE questions SET qns = ? WHERE qid = ?";
        $update_question_stmt = mysqli_prepare($con, $update_question_query);
        mysqli_stmt_bind_param($update_question_stmt, "ss", $updated_question, $question_id);
        $update_question_result = mysqli_stmt_execute($update_question_stmt);
        // Check if the question update was successful
        if ($update_question_result) {
            // echo "<div class='alert alert-success' role='alert'>Question updated successfully.</div>";
            echo "<script>alert('Question Is Updated Successfully..!😇')</script>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error updating question: " . mysqli_error($con) . "</div>";
        }
        // Update options if provided
        if (isset($_POST['option'])) {
            foreach ($_POST['option'] as $option_id => $updated_option) {
                // Prepare the SQL query to update the option text in the database
                $update_option_query = "UPDATE options SET option = '$updated_option' WHERE optionid = '$option_id' AND qid = '$question_id'";
                $update_option_result = mysqli_query($con, $update_option_query);
                // Check if the option update was successful
                if (!$update_option_result) {
                    echo "<div class='alert alert-danger' role='alert'>Error updating option: " . mysqli_error($con) . "</div>";
                }
            }
        } else {
            // If 'qid' parameter is not provided in the form data, inform the user
            echo "<div class='alert alert-danger' role='alert'>Question ID (qid) not provided in the form.</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question and Options</title>
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
            margin-left: 460px;
            font-size: 30px;
            background-color: aliceblue;
            /* You can Give Background color for your form from here */
        }
        .div {
            width: 200px;
            /* Set your desired width */
            height: 100px;
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
    <div class="container mt-5">
        <?php
        // Check if the 'qid' parameter is set in the URL
        if (isset($_GET['qid'])) {
            // Retrieve the question ID from the URL parameter
            $question_id = $_GET['qid'];
            // Prepare the SQL query to fetch question data based on the question ID
            $question_query = "SELECT * FROM questions WHERE qid = ?";
            $question_stmt = mysqli_prepare($con, $question_query);
            mysqli_stmt_bind_param($question_stmt, "s", $question_id);
            mysqli_stmt_execute($question_stmt);
            $question_result = mysqli_stmt_get_result($question_stmt);
            // Prepare the SQL query with a placeholder for the question ID to fetch options
            $options_query = "SELECT * FROM options WHERE qid = ?";
            $options_stmt = mysqli_prepare($con, $options_query);
            mysqli_stmt_bind_param($options_stmt, "s", $question_id);
            mysqli_stmt_execute($options_stmt);
            $options_result = mysqli_stmt_get_result($options_stmt);
            // Check if the query for question data was successful
            if ($question_result) {
                // Fetch question data
                $question_data = mysqli_fetch_assoc($question_result);
                // Display question
                echo "<form action='' method='POST'>";
                echo "<div class='mb-4'>";
                echo "<h2 class='mb-3'>Question:</h2>";
                echo "<div class='form-group row'>";
                echo "<label for='qid' class='col-sm-2 col-form-label'>Question ID:</label>";
                echo "<div class='col-sm-10'>";
                echo "<input type='text' id='qid' name='qid' class='form-control' value='" . $question_data['qid'] . "' readonly>";
                echo "</div></div>";
                echo "<div class='form-group row'>";
                echo "<label for='qns' class='col-sm-2 col-form-label'>Question:</label>";
                echo "<div class='col-sm-10'>";
                echo "<input type='text' id='qns' name='qns' class='form-control' value='" . $question_data['qns'] . "'>";
                echo "</div></div>";
                echo "</div>";
                // Check if there are any options
                if (mysqli_num_rows($options_result) > 0) {
                    // Output options in a table
                    echo "<div class='mb-4'>";
                    echo "<h2 class='mb-3'>Options:</h2>";
                    echo "<table class='table' border='2'>";
                    echo "<thead class='thead-dark'>";
                    echo "<tr><th>Option ID</th><th>Option</th><th>Question ID</th></tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($row = mysqli_fetch_assoc($options_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['optionid'] . "</td>";
                        echo "<td><input type='text' name='option[" . $row['optionid'] . "]' class='form-control' value='" . $row['option'] . "'></td>";
                        echo "<td>" . $row['qid'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                }
                $selected_answer = getSelectedAnswer($con, $question_id);
                if ($selected_answer !== null) {
                    echo "<div class='mb-3'>";
                    echo "<h2>Selected Answer:</h2>";
                    echo "<input type='text' class='form-control' value='Correct Answer : $selected_answer' readonly>";
                    echo "</div>";
                } else {
                    echo "<p>No options found for Question ID: $question_id</p>";
                }
                // Update button
                echo "<br><button type='submit' class='button btn btn-success'>Update Question</button> <button class='btn btn-secondary' onclick='goBack()'> Cancel</button>";
                // End form
                echo "</form>";
            } else {
                // If the query for question data fails, display an error message
                echo "Error executing the query for question data: " . mysqli_error($con);
            }
        } else {
            // If 'qid' parameter is not provided in the URL, inform the user
            echo "<p class='text-danger'>Question ID (qid) not provided in the URL.</p>";
        }
        ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="div">
        <!-- Following Script Is Used For Back Button -->
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
    <!-- Containder End -->
    <!-- Page Footer Start -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Speed Test Pvt. Ltd.  All rights reserved.</p>
    </footer>
    <!-- Page Footer End -->
</body>
</html>