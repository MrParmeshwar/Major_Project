<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Astra theme CSS (replace 'path-to-astra-css' with the actual path) -->
    <link rel="stylesheet" href="path-to-astra-css/astra.min.css">
    <style>
        .navbar {
            background-color: #007bff;
        }
        .box a {
            color: yellow;
            font-size: 20px;
            margin-left: 150px;
        }
        .foot {
            background-color: black;
        }
        .left {
            margin-left: 150px;
        }
        .color {
            /* background-color:red; */
            /* height: 50px; */
            color: white;
        }
        .bold {
            margin-left: 5px;
            margin-right: 50px;
            margin-top: 300px;
        }
        .demo {
            text-align: center;
        }
        .size{
            margin-left: 800px;
        }
        .size1{
            margin-left: 750px;
            font-family: arial;
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
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-6">
                <span class="logo"><img src="./Images/logo2.png" alt="Image Not Found" height="50px" width="50px"> <a href="index.php" class="color">Speed Test</a></span>
            </div>
            <div class="color col-md-2 col-md-offset-4 text-center">
                <a href="#" class="btn btn-success" style="border-radius: 0%" data-toggle="modal"
                    data-target="#myModal">
                    <!-- Following line will add the login icon before the login button  -->
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;
                    <span class="title1" ><b>Student Login</b></span>
                </a>
            </div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <h4 class="modal-title"><span style="color:black;font-family:'Arial'">Student
                                        Login</b></span></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6">
                                            <input id="email" name="email" placeholder="Email"
                                                class="form-control input-md" type="email">
                                        </div>
                                    </div>
                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password"></label>
                                        <div class="col-md-6">
                                            <input id="password" name="password" placeholder="Password"
                                                class="form-control input-md" type="password">
                                        </div>
                                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Log in</button>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Nav bar End -->
    <!-- User Registration Form start-->
    <div class="bg1">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-4 panel">
                <!-- sign in form begins -->
                <form class="form-horizontal" name="form" action="student_register.php?q=student.php"
                    onSubmit="return validateForm()" method="POST">
                    <fieldset>
                        <h2>
                            <p class="text-center"><b>Register Now</b></p>
                        </h2>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="name" name="name" placeholder="First name" class="form-control input-md"
                                    type="text" required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="lname"></label>
                            <div class="col-md-12">
                                <input id="name" name="lname" placeholder="Last name" class="form-control input-md"
                                    type="text" required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="gender"></label>
                            <div class="col-md-12">
                                <select id="gender" name="gender" placeholder="Gender" class="form-control input-md"
                                    required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="college" name="college" placeholder="College Name"
                                    class="form-control input-md" type="text" required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label title1" for="email"></label>
                            <div class="col-md-12">
                                <input id="email" name="email" placeholder="Email ID" class="form-control input-md"
                                    type="email" required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="mob"></label>
                            <div class="col-md-12">
                                <input id="mob" name="mob" placeholder="Contact Number" class="form-control input-md"
                                    type="number" required>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="password"></label>
                            <div class="col-md-12">
                                <input id="password" name="password" placeholder="Enter 8 Digit Password"
                                    class="form-control input-md" type="password" required minlength="8">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12control-label" for="cpassword"></label>
                            <div class="col-md-12">
                                <input id="cpassword" name="cpassword" placeholder="Confirm Your Password"
                                    class="form-control input-md" type="password" required minlength="8">
                            </div>
                        </div>
                        <?php if (@$_GET['q7']) {
                            echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                        } ?>
                        <!-- Button -->
                        <div class="left col-md-4">
                            <button type="submit" class="left sub btn btn-danger mx-auto" value="Register">
                                <h4>Register</h4>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- User Registration Form End -->
    <!-- Container Footer Start -->
    <div class="row foot">
        <div class="col-md-4 box">
            <a href="#" data-toggle="modal" data-target="#login">Director Login</a>
        </div>
        <div class="col-md-4 box">
            <a href="#" data-toggle="modal" data-target="#login1">Teacher Login</a>
        </div>
        <div class="demo col-md-4 box">
            <a href="feedback.php">Feedback</a>
        </div>
    </div>
    <!-- Container Footer End -->
    <!--  Login Model Start -->
   <!-- Director Login Start -->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="false">&times;</span><span
              class="sr-only">Close</span></button> -->
                    <h4 class="modal-title"><span style="color:black;font-family:'Arial' ">
                            <center>Director Login</center>
                        </span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=Dashboard.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Your Email"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="login" value="Login" class="btn btn-primary"
                                        style="border-radius:0%" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<!-- Director Login End -->
    <!-- Teacher Login Start -->
    <div class="modal fade" id="login1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="false">&times;</span><span
              class="sr-only">Close</span></button> -->
                    <h4 class="modal-title"><span style="color:black;font-family:'Arial' ">
                            <center>Teacher Login</center>
                        </span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="Teacher_login.php?q=Dashboard.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="50" placeholder="Teacher Email"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="login" value="Login" class="btn btn-primary"
                                        style="border-radius:0%" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- Teacher Login End -->
    <!-- Login Model End -->
    <!-- Page Footer Start -->
    <div>
    <hr>
  </div>
  <footer class="bg-dark text-white py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-left">
                <h5 style="font-family: arial;">Meet the Team</h5>
                <ul class="text-left">
                    <li>Aajinath Kanhere</li>
                    <li>Rameshwar Bhagat</li>
                    <li>Parmeshwar Kanhere</li>
                </ul>
            </div>
            <div class=" col-lg-6 text-left">
                <h5 class="size1">Contact_Us</h5>
                <ul class="size list-unstyled">
                    <li>Email: <a href="mailto:aajinathkanhere@gmail.com">aajinathkanhere@gmail.com</a></li>
                    <li>Email: <a href="mailto:rameshwarb2004@gmail.com">rameshwarb2004@gmail.com</a></li>
                    <li>Email: <a href="mailto:kanherepamu1909@gmail.com">kanherepamu1909@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="mb-0">&copy; 2024 Speed Test Pvt. Ltd.  All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
    <!-- Page Footer End -->
</body>
</html>