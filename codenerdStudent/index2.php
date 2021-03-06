<?php
session_start();
include("connection.php");

//log Out

include("logout.php");

//remember me
include("rememberme.php");
?>


<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    


    <link rel="stylesheet" href="card-design.css">

    <title>CodeNerd</title>

</head>


<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <button class="btn brandB"> -->
                <a class="brandB" role="button" href="index.php"><img class="img" src="codenerd.png" height="50" width="100"></a>
                <!-- </button> -->

                <button type="button" class="navbar-toggle" data-target="#navCol" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            </div>
            <!-- Navigation bar collaspe -->

            <div class="navbar-collapse collapse" id="navCol">
                <ul class="nav navbar-nav">
                    <!-- <li><a href="#">Technology</a></li> -->
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Algorithm</a></li>
                    <li><a href="#">About us</a></li>

                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit">Go</button> <!-- Search bar -->
                        </span>
                        <input type="text" class="form-control" placeholder="Search" id="search">

                        <span class="glyphicon glyphicon-search form-control-feedback"></span>

                    </div>
                </form>

                <!-- Login Button  -->
                <form class="navbar-form navbar-right">
                    <input class="btn btn-success " type="button" value="Login" data-target="#loginmodal" data-toggle="modal">

                </form>
                <!-- Sign Up Button  -->
                <form class="navbar-form navbar-right">
                    <input class="btn btn-info" type="button" value="Signup" data-target="#signupmodal" data-toggle="modal">
                </form>


            </div>

        </div>
    </nav>


    <div>

        <!-- login form-->

        <form id="loginform" class="form" method="POST">
            <div class="modal fade" id="loginmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <p class="h3" id="modalLabel">LogIn:</p>
                        </div>
                        <div class="modal-body">
                            <!-- login Message  -->
                            <div id="loginmessage">

                            </div>


                            <div class="form-group">
                                <label for="loginemail">
                                    Email<span style="color: red;"> *</span>
                                </label>
                                <input type="email" id="loginemail" placeholder="Email" class="form-control" maxlength="50" name="loginemail">
                            </div>

                            <div class="form-group">
                                <label for="password">
                                    Password<span style="color: red;"> *</span>
                                </label>

                                <input type="password" id="loginpassword" placeholder="Password" class="form-control" maxlength="30" name="loginpassword">
                            </div>

                            <div class="checkbox">

                                <label for="checkbox">
                                    <input type="checkbox" id="rememberMe" name="rememberme">
                                    Remember me
                                </label>

                                <a class="pull-right" style="cursor: pointer;" data-target="#forgotpasswordModal" data-toggle="modal" data-dismiss="modal">
                                    Forgot password?
                                </a>
                            </div>



                        </div>
                        <div class="modal-footer">

                            <input class="btn btn-info pull-left" type="button" value="Regester" data-target="#signupmodal" data-toggle="modal" data-dismiss="modal">

                            <input type="submit" class="btn btn-success btn-right" name="login" value="Login"></input>

                            <button class="btn btn-default btn-right" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>


            </div>

        </form>


        <!--Forgot password form-->
        <form method="post" id="forgotpasswordform">
            <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <h4 id="myModalLabel">
                                Forgot Password? Enter your email address:
                            </h4>
                        </div>
                        <div class="modal-body">

                            <!--forgot password message from PHP file-->
                            <div id="forgotpasswordmessage"></div>


                            <div class="form-group">
                                <label for="email">
                                    Email address<span style="color: red;"> *</span>
                                </label>
                                <input type="email" id="forgotemail" placeholder="Email address" class="form-control" maxlength="50" name="forgotemail">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-success" name="forgotpassword" type="submit" value="Submit">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <input class="btn btn-info pull-left" type="button" value="Regester" data-target="#signupmodal" data-toggle="modal" data-dismiss="modal">

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Signup  form-->
        <form id="signupform" class="form" method="POST">

            <div class="modal fade" id="signupmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <p class="h3" id="modalLabel">Sing Up here:</p>
                        </div>
                        <div class="modal-body">

                            <!-- Signup Message -->

                            <div id="signupmessage">

                            </div>


                            <div class="form-group">
                                <label for="username">
                                    Username<span style="color: red;"> *</span>
                                </label>
                                <input type="text" id="signupusername" placeholder="Username" class="form-control" name="signupusername">
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    Email address<span style="color: red;"> *</span>
                                </label>
                                <input type="email" id="signupemail" placeholder="Email address" class="form-control" maxlength="50" name="signupemail">
                            </div>

                            <div class="form-group">
                                <label for="password">
                                    Password<span style="color: red;"> *</span>
                                </label>

                                <input type="password" id="signuppassword" placeholder="Password" class="form-control" name="signuppassword" maxlength="30">
                            </div>

                            <div class="form-group">
                                <label for="password2">
                                    Re-enter Password<span style="color: red;"> *</span>
                                </label>

                                <input type="password" id="signuppassword2" placeholder="Re-enter Password" class="form-control" name="signuppassword2" maxlength="30">
                            </div>



                        </div>
                        <div class="modal-footer">

                            <input type="submit" class="btn btn-success btn-right" name="signup" value="SignUp"></input>

                            <button class="btn btn-default btn-right" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>

                </div>


            </div>


        </form>


    </div>

    <!-- container technology and other section  -->

    <div class="container-fluid">
    <P class="h1" style="text-align: center;margin-top: 100px" >The most concise screencasts for the working developer</p>
        <div class="row" style="margin-top: 0px;">
        
            <div class="card col-sm-5 col-md-4 col-lg-2">
                <!-- <div class=""> -->
                    <div class="thumbnail face face1">
                        <div class="caption content">
                            <img src="java.png">
                            <h3>Java</h3>
                        </div>
                    </div>
                    <div class="thumbnail face face2">
                        <div class="caption content">
                            <p>
                                You've seen the craze for learning code. But what exactly is coding?
                                
                            </p>
                            <a href="#">Read More</a>
                        </div>

                    </div>
                <!-- </div> -->
            </div>
            <div class="card col-sm-5 col-md-4 col-lg-2">
                <!-- <div class=""> -->
                    <div class="thumbnail face face1">
                        <div class="caption content">
                            <img src="c.png">
                            <h3>C</h3>
                        </div>
                    </div>
                    <div class="thumbnail face face2">
                        <div class="caption content">
                            <p>
                                You've seen the craze for learning code. But what exactly is coding?
                                
                            </p>
                            <a href="test.php">Read More</a>
                        </div>

                    </div>
                <!-- </div> -->
            </div>

            <div class="card col-sm-5 col-md-4 col-lg-2">
                <!-- <div class=""> -->
                    <div class="thumbnail face face1">
                        <div class="caption content">
                            <img src="python.png">
                            <h3>Python</h3>
                        </div>
                    </div>
                    <div class="thumbnail face face2">
                        <div class="caption content">
                            <p>
                                You've seen the craze for learning code. But what exactly is coding?
                                
                            </p>
                            <a class="center" href="#">Read More</a>
                        </div>

                    </div>
                <!-- </div> -->
            </div>

            

            <div class="card col-sm-5 col-md-4 col-lg-2">
                <!-- <div class=""> -->
                    <div class="thumbnail face face1">
                        <div class="caption content">
                            <img src="pc.png">
                            <h3>Design</h3>
                        </div>
                    </div>
                    <div class="thumbnail face face2">
                        <div class="caption content">
                            <p>
                                You've seen the craze for learning code. But what exactly is coding?
                                
                            </p>
                            <a  href="#">Read More</a>
                        </div>

                    </div>
                <!-- </div> -->
            </div>

            <div class="card col-sm-5 col-md-4 col-lg-2">
                <!-- <div class=""> -->
                    <div class="thumbnail face face1">
                        <div class="caption content">
                            <img src="pc.png">
                            <h3>Design</h3>
                        </div>
                    </div>
                    <div class="thumbnail face face2">
                        <div class="caption content">
                            <p>
                                You've seen the craze for learning code. But what exactly is coding?
                                
                            </p>
                            <a  href="#">Read More</a>
                        </div>

                    </div>
                <!-- </div> -->
            </div>

            <div class="card col-sm-5 col-md-4 col-lg-2">
                <!-- <div class=""> -->
                    <div class="thumbnail face face1">
                        <div class="caption content">
                            <img src="c.png">
                            <h3>C</h3>
                        </div>
                    </div>
                    <div class="thumbnail face face2">
                        <div class="caption content">
                            <p>
                                You've seen the craze for learning code. But what exactly is coding?
                                
                            </p>
                            <a href="test.php">Read More</a>
                        </div>

                    </div>
                <!-- </div> -->
            </div>
        </div>

        <a href="test.php" class="btn btn-default center-block" style="border-radius: 10px;border:2px solid;"><b>BROWSE ALL COURSES</b></a>


    </div>

    <script src="home.js"></script>

</body>

</html>