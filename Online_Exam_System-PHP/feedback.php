<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>FEEDBACK</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!--alert message-->
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    } ?>
    <!--alert message end-->
    <!-- Cache control -->
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path-to-astra-css/astra.min.css">
    <style>
        .navbar {
            background-color: #007bff;
        }
        .button {
            background-color: #4b7f86;
        }
       .footer{
        font-size: 18px;
       }
       div {
            font-family: 'Arial';
            font-weight: normal;
            font-size: 18px;
        }
        .marquee {
            color: yellow;
            white-space: nowrap;
            overflow: hidden;
            animation: marquee 10s linear infinite;
        }
         /* Below Code Will Display The Message In The Format Of marque Tag */
        @keyframes marquee {
            0% {
                transform: translateX(450%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        .color{
            color: white;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            font-size: 15px; 
        }
        .size{
            margin-left: 800px;
        }
        .size1{
            margin-left: 750px;
        }
        h5{
            font-size: 20px;
        }
        .textarea1{
            font-size: 15px;
        }
    </style>
</head>
<body>
    <!-- Nav Bar Start -->
    <div class=" header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-6">
                <span class="logo"> <img src="./Images/logo2.png" alt="Image Not Found" height="50px" width="50px"> <a href="index.php" class="color">Speed Test </a></span>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <div class="md-4">
                    <a href="Dashboard.php" class="btn-success pull-right btn " style="border-radius:0%"
                        data-target="#myModal"><span class="glyphicon glyphicon-home"
                            aria-hidden="true"></span>&nbsp;<span class="title1"><b>Home</b></span></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Nav bar End -->
    <!-- Feedback Containder Start -->
    <div class="bg1">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 panel" style="background-image:url(Images/icn2.jpg); min-height:400px;">
                <h2 align="center" style="font-family:'Arial'; color:#000066">*FEEDBACK/REPORT A PROBLEM*</h2>
                <div style="font-size:14px">
                    <?php
                    if (@$_GET['q'])
                        echo '<span style="font-size:18px;">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
                    else {
                        echo '
            <form role="form" method="post" action="feed.php?q=feedback.php">
              <div class="row">
                <div class="col-md-3 "><b>Name:</b><br /><br /><b>Subject:</b></div>
                <div class="col-md-9">
                  <!-- Text input-->
                  <div class="form-group">
                    <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required><br />
                    <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required>
                  </div>
                </div>
              </div>
              <!-- End of row -->
              <div class="row">
                <div class="col-md-3"><b>E-Mail address:</b></div>
                <div class="col-md-9">
                  <!-- Text input-->
                  <div class="form-group">
                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
                  </div>
                </div>
              </div>
              <!-- End of row -->
              <div class="form-group" >
                <textarea rows="11" cols="8" name="feedback" class="textarea1 form-control" placeholder="Write feedback here..." required></textarea>
              </div>
              <div class="" align="center">
                <input type="submit" name="submit" value="Submit" class="footer btn btn-primary"/>
              </div>
            </form>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- Feedback container end -->
    <!-- Container Footer start -->
    <div class="row footer">
        <div class="marquee">
            Thank You For Giving The Feedback..!
        </div>
    </div>
    <!-- Container footer end -->
    <!-- Page Footer Start -->
    <div>
    <hr>
  </div>
  <footer class="bg-dark text-white py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-left">
                <h5>Meet the Team</h5>
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