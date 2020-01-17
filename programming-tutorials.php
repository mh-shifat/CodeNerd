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


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <button class="btn brandB"> -->
                <a class="brandB" role="button" href="home.php"><img class="img" src="codenerd.png" height="50" width="100"></a>
                <!-- </button> -->

                <button type="button" class="navbar-toggle" data-target="#navCol" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            </div>
            <div class="navbar-collapse collapse" id="navCol">
                <ul class="nav navbar-nav">
                    <li><a href="#TECHNOLOGY">TECHNOLOGY</a></li>
                    <li><a href="#Algorithm">ALGORITHM</a></li>


                    <li><a href="#CONTACT">CONTACT</a></li>

                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit">Go</button>
                        </span>
                        <input type="text" class="form-control" placeholder="Search" id="search">

                        <span class="glyphicon glyphicon-search form-control-feedback"></span>

                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">

                    <!-- Login Button  -->
                    <form class="navbar-form navbar-right">
                        <li><input class="btn btn-success " type="button" value="Login" data-target="#loginmodal" data-toggle="modal"></li>

                    </form>
                    <!-- Sign Up Button  -->
                    <form class="navbar-form navbar-right">
                        <li><input class="btn btn-info" type="button" value="Signup" data-target="#signupmodal" data-toggle="modal"></li>
                    </form>

                </ul>



                
            </div>

        </div>
    </nav>


    <!-- container technology and other section  -->

    <div id="TECHNOLOGY" class="container-fluid">
        <P class="h1" style="text-align: center;margin-top: 100px">All Programming Language Tutorials</p>

        <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="tab" href="#LANGUAGES">LANGUAGES</a></li>
            <li><a data-toggle="tab" href="#LIBRARIES">LIBRARIES</a></li>
            <li><a data-toggle="tab" href="#FRAMEWORKS">FRAMEWORKS</a></li>
            <li><a data-toggle="tab" href="#TOOLS">TOOLS</a></li>
            <li><a data-toggle="tab" href="#PLATFORMS">PLATFORMS</a></li>
        </ul>

        <div class="tab-content">
            <div id="LANGUAGES" class="tab-pane fade in active">
                <div class="rows">
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>C</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="c.png" width="100px" height="100px">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Python</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="python.png" width="100px" height="100px">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <div class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Java</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="java.png">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <div class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Javascript</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="javascriptlang.png">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div id="LIBRARIES" class="tab-pane fade">
                <div class="rows">
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>

                </div>
            </div>
            <div id="FRAMEWORKS" class="tab-pane fade">
                <div class="rows">
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Angular JS</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="angular2.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Vue JS</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="vue.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Jquery</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="jquery.png" width="50%" height="50%">
                                </div>
                            </idv>
                        </div>
                    </a>

                </div>
            </div>
            <div id="TOOLS" class="tab-pane fade">
                <div class="rows">
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Angular JS</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="angular2.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Vue JS</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="vue.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Jquery</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="jquery.png" width="50%" height="50%">
                                </div>
                            </idv>
                        </div>
                    </a>

                </div>
            </div>
            <div id="PLATFORMS" class="tab-pane fade">
                <div class="rows">
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>React</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="react.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Angular JS</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="angular2.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Vue JS</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="vue.png">
                                </div>
                            </idv>
                        </div>
                    </a>
                    <a href="test.php">
                        <div data-link="#" class="col-sm-3 tech" style="border:1px solid black;background-color:#21252D;height:200px">

                            <idv class="row" style="cursor:pointer">
                                <div class="col-sm-6 ">
                                    <h3>Jquery</h3>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="jquery.png" width="50%" height="50%">
                                </div>
                            </idv>
                        </div>
                    </a>

                </div>
            </div>
        </div>




    </div>

    <br>


    <!-- Container (Portfolio Section) -->
    <div class="container-fluid text-center bg-grey">
        <h2>Quotes We Love!</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <h4>"When in doubt, use brute force :) "<br><span>Ken Thompson</span></h4>
                </div>

                <div class="item">
                    <h4>"UNIX is basically a simple operating system, but you have to be a genius to understand the simplicity"<br><span>Dennis Ritchie</span></h4>
                </div>

                <div class="item">
                    <h4>"See, you not only have to be a good coder to create a system like Linux, you have to be a sneaky bastard too"<br><span>Linus Torvalds</span></h4>
                </div>
                <br><br>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>


     <!-- Container (Contact Section) -->
     <div id="CONTACT" class="container-fluid bg-grey">
    
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Swe,SUST</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 12121212</p>
            <p><span class="glyphicon glyphicon-envelope"></span> codenerd@gmail.com</p>
        </div>
        <div class="col-sm-7">
        <!-- <div class="col-sm-7"> -->
        <form id="contactform" class="form"  method="POST">
                <div class="row">
                    <div class="col-sm-6 form-group">
                    <!-- <i class="glyphicon glyphicon-user"></i> -->
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                    <!-- <i class="glyphicon glyphicon-envelope"></i> -->
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <div class=" input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                    <textarea class="form-control" id="message" name="comments" placeholder="Comment" rows="5"></textarea>
                    </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input type="submit" class="btn btn-default pull-right"  value="Send" name="send">
                    </div>
                </div>

            </form>
        </div>

        <div class="contactformerror">

        </div>
    </div>
</div>

    <script src="home.js"></script>


    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>

</html>