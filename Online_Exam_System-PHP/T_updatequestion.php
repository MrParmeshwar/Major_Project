<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
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
            height: 250px;
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

        .container {
            overflow-y: hidden;
        }

        .color {
            color: white;
            font-size: 30px;
        }

        .glyphicon-pencil::before {
            text-decoration: underline;
        }

        .input-div {
            margin-top: 5px;
            overflow: hidden;
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
                        href="index.php" class="color">Online Exam System </a></span>
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
                        echo 'class="active"'; ?>><a href="dash.php?q=5">Update Exam</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation menu closed -->

    <?php
    if (isset($_GET['eid'])) {
        // Include the database connection file
        include("dbConnection.php");

        // Sanitize the exam ID
        $examid = mysqli_real_escape_string($con, $_GET['eid']);

        // Prepare the SQL query
        $query = "SELECT * FROM questions WHERE eid = '$examid'";

        // Execute the query
        $result = mysqli_query($con, $query);

        // Check if any questions were found
        if ($result && mysqli_num_rows($result) > 0) {
            ?>
            <!-- Table to display fetched data -->
            <div class="container mt-5">
                <h2>Questions</h2>
                <div class="table-responsive">
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th>Question ID</th>
                                <th>Question</th>
                                <th>Choice</th>
                                <th>Serial Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch and display data rows
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['qid']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['qns']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['choice']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['sn']; ?>
                                    </td>
                                    <td><a href="EditQuestion.php?qid=<?php echo $row['qid']; ?>"
                                            class="btn btn-success glyphicon glyphicon-edit"> EditQuestion</a></td>

                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>

                    </table>
                    <button class="btn btn-success" onclick="" id="addQuestion"> Add Question </button>
                    <button class="btn btn-secondary" onclick="goBack()"> Cancel</button>

                </div>

            </div>
            <!-- Following Div Will Display The Content Of New Questions -->
            <div id="inputContainer"></div>

            <?php
        } else {
            echo "No questions found for this exam.";
        }
    }
    ?>
    <script>
       document.getElementById("addQuestion").addEventListener("click", function () {
    let containerDiv = document.createElement("div");
    containerDiv.classList.add("container");

    let label = document.createElement("label");
    label.setAttribute("for", "numQuestions");
    label.innerText = "* Enter Number Of Questions that you want to add : ";
    label.classList.add("mt-4");

    // Create a new div for the input box
    let inputDiv = document.createElement("div");
    inputDiv.classList.add("input-div");

    let input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("id", "numQuestions");
    input.setAttribute("name", "numQuestions");

    inputDiv.appendChild(input);

    let nextButton = document.createElement("button");
    nextButton.innerText = "Next";
    nextButton.setAttribute("id", "nextButton");
    nextButton.classList.add("btn");
    nextButton.classList.add("btn-success", "mt-4");
    nextButton.addEventListener("click", function () {
        // Get the value from the input box
        let numQuestions = document.getElementById("numQuestions").value;

        // Create the form with the specified number of questions
        let formHTML = '<form id="form2" class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' + numQuestions + '&eid=' + encodeURIComponent(window.location.href.split("?")[1].split("&")[0].split("=")[1]) + '&ch=4 "  method="POST"><fieldset>';

        for (let i = 1; i <= numQuestions; i++) {
            formHTML += '<b>Question number&nbsp;' + i + '&nbsp;:</><br /><!-- Text input--><div class="form-group"><label class="col-md-12 control-label" for="qns' + i + ' "></label><div class="col-md-12"><textarea rows="3" cols="5" name="qns' + i + '" class="form-control " placeholder="Write question number ' + i + ' here..." required></textarea></div></div><!-- Text input--><div class="form-group"><label class="col-md-12 control-label" for="' + i + '1"></label><div class="col-md-12"><input id="' + i + '1" name="' + i + '1" placeholder="Enter option a" class="form-control input-md" type="text" required></div></div><!-- Text input--><div class="form-group"><label class="col-md-12 control-label" for="' + i + '2"></label><div class="col-md-12"><input id="' + i + '2" name="' + i + '2" placeholder="Enter option b" class="form-control input-md" type="text" required></div></div><!-- Text input--><div class="form-group"><label class="col-md-12 control-label" for="' + i + '3"></label><div class="col-md-12"><input id="' + i + '3" name="' + i + '3" placeholder="Enter option c" class="form-control input-md" type="text" required></div></div><!-- Text input--><div class="form-group"><label class="col-md-12 control-label" for="' + i + '4"></label><div class="col-md-12"><input id="' + i + '4" name="' + i + '4" placeholder="Enter option d" class="form-control input-md" type="text" required></div></div><br /><b>Correct answer</b>:<br /><select id="ans' + i + '" name="ans' + i + '" placeholder="Choose correct answer " class="form-control input-md" required><option value="">Select answer for question ' + i + '</option><option value="a">Option a</option><option value="b">Option b</option><option value="c">Option c</option><option value="d">Option d</option> </select><br /><br />';
        }

        formHTML += '<div class="form-group"><label class="col-md-12 control-label" for=""></label><div class="col-md-12"><input  type="submit" style="margin-left:54%" class="btn btn-primary" value="Submit" class="btn btn-primary"/><div class="demo"></div></div></div></fieldset></form>';

        // Append the form to the container div
        containerDiv.innerHTML = formHTML;
    });

    containerDiv.appendChild(label);
    containerDiv.appendChild(inputDiv);
    containerDiv.appendChild(nextButton);

    document.getElementById("inputContainer").appendChild(containerDiv);
});
//  Below Is The Function For Back Button 
function goBack() {
    window.history.back();
}

    </script>

    <div class="div">
        <!-- Folowing script Is Used For Back button -->
        <!-- <script>
            function goBack() {
                window.history.back();
            }
        </script> -->

    </div>
    <!-- Page Footer Start -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Online Examination System. All rights reserved.</p>
    </footer>
    <!-- Page Footer End -->

</body>

</html>
