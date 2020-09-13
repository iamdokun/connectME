<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ConnectME</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/candidate.css">
</head>
<body>
    <div class="container-fluid" id="contain">
        <!-- START: Top Logo, Search Bar & Nav Bar -->
        <header>
            <div class="row topsearch">
                <div class="col-sm logo">
                    <img src="./images/logoNew.png" alt="ConnectME Logo">

                    <div class="topinput input-group">
                        <div class="input-group" id="inputbox">
                            <button type="button" class="btn" id="topmapbtn"><i class="fas fa-map-marker-alt"
                                    style="color: #A21942;"></i></button><input type="text" class="form-control"
                                id="inputmapsearch" aria-label="Username" aria-describedby="basic-addon1"
                                placeholder="Location">
                            <input type="text" class="form-control" id="inputsearch" aria-label="Username"
                                aria-describedby="basic-addon1" placeholder="Search by job title, keyword, etc."><button
                                type="button" class="btn" id="topsearchbtn"><i class="fas fa-search"
                                    style="color: white;"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <div class="row topnav">
                    <div class="col-sm btnleft">

                        <nav class="navbar navbar-expand-lg navbar-light" id="check">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <span class="dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Find
                                            Job<span class="caret"></span></a>
                                        <ul class="dropdown-menu" style="background-color: #175977;">
                                            <li><a href="#" style="font-size: 13px; padding-left: 5%;">Data One</a></li>
                                            <li><a href="#" style="font-size: 13px; padding-left: 5%;">Data Two</a></li>
                                            <li><a href="#" style="font-size: 13px; padding-left: 5%;">Data There</a>
                                            </li>
                                        </ul>
                                    </span>

                                    <a class="nav-link" href="#"><span class="navtext2">Find Candidates</span> </a>
                                    <a class="nav-link" href="#"><span class="navtext3">Resume Help</span> </a>
                                    <a class="nav-link" href="#"><span class="navtext">Skills</span></a>
                                    <a class="nav-link" href="#"><span class="navtext4">Career Advice</span> </a>
                                </div>
                            </div>

                        </nav>
                        <div id="check2">
                            <a href="#" class="btn float-sm-right" id="signupbtn">Sign Up</a>
                            <a href="#" class="btn float-sm-right" style="color: white;">Log in</a>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- END: Top Logo, Search Bar & Nav Bar -->
        </header>

        <!-- START: Home Page Banner -->
        <section id="bckgrd">
            <div id="topbckgrd">
                <div id="topbckgrdOpacity">
                    <div id="connect">
                        <img src="" alt="">
                        <div id="connectText">Don't just get hired, <br> Get connected.</div><br>
                        <button class="btn" id="signupbtn2">Sign Up</button>
                    </div>
                </div>
            </div>
            <!-- END: Home Page Banner -->
        </section>
</body>

</html>

<?php


?>