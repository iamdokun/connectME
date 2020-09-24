<?php
include database.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post A Job</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/postajob.css">
</head>

<body>
    <!-- START: NavBar -->
    <nav class="navbar navbar-expand-lg navTop ">
        <a class="navbar-brand mx-5" href="index.html">
            <div class="logo"><img src="images/connectME.png" alt=""></div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><img src="images/icons/menuBarx.png" alt=""></span>
        </button>

        <div class="collapse navbar-collapse pl-5 ml-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item mr-3">
                    <a class="nav-link topLink" href="index.html">Home</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link topLink" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle topLink" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Resume Help</a>
                        <a class="dropdown-item" href="#">Training</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item topLink" href="#">Career Advice</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link topLink" href="contact.html">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled topLink" tabindex="-1" href="#" aria-disabled="true">Resources</a>
                </li>
            </ul>
            <a class="postajob" href="postajob.html">
                <div>Post A Job</div>
            </a>
            <a class="login" href="login.php">
                <div>Log In</div>
            </a>
            <a href="signup.php"><button class="signup mr-5">Sign Up</button></a>
        </div>
    </nav>
    <!-- END: NavBar -->

    <!-- FORM AREA BEGINS -->
    <section class="mb-5 pb-4">
        <div class="container createlisting mt-5 pb-5">
            <div class="row createnew px-5 py-2">Create a New Job Listing</div>
            <form class="needs-validation px-5 py-4" novalidate>
                <div class="form-row">
                    <div class="col-sm mb-4">
                        <label for="validationCustom01">Job Title</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" maxlength="100"
                            required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            100 character limit.
                        </small>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Job Functions</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid function.
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Industry</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid industry.
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Work Type</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid type.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Location</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid location.
                        </div>
                    </div>
                    <div class="col-sm-2 mb-4">
                        <label for="validationCustom03">Monthly Salary</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid figure.
                        </div>
                    </div>
                    <div class="col-sm-2 mb-4">
                        <label for="validationCustom03">Bonuses</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid figure.
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Minimum Qualification</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid certificate.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Years of Experience</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid location.
                        </div>
                    </div>
                    <div class="col-sm-2 mb-4">
                        <label for="validationCustom03">Available Openings</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid figure.
                        </div>
                    </div>
                    <div class="col-sm-2 mb-4">
                        <label for="validationCustom03">Job Level</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid level.
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label for="validationCustom01">Days online (30 days limit)</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid certificate.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm mb-4">
                        <label for="validationCustom03">Job Description/Job Summary</label>
                        <textarea class="form-control" id="validationCustom03" rows="3" maxlength="250"
                            required></textarea>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            250 character limit.
                        </small>
                        <div class="invalid-feedback">
                            Please provide a valid description.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                        <label class="form-check-label" for="invalidCheck">
                            Post job as anonymous
                        </label>
                        <!-- <div class="invalid-feedback">
                            Do you wish to post as anonymous?
                        </div> -->
                    </div>
                </div>
                <div class="form-row form-buttons mt-5">
                    <div class="col-sm-6">
                        <button class="btn savedraft" type="submit">SAVE DRAFT</button>
                    </div>
                    <div class="col-sm-3 preview pt-3 px-3">
                        <h6><a class="" href="#">PREVIEW JOB LISTING</a></h6>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn postdraft" type="submit">POST</button>
                    </div>
                </div>
            </form>
    </section>

    <!-- START: FOOTER -->
    <footer class="container-fluid ">
        <div class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm">
                                <div class="footernav1">
                                    <span>Who We Are</span>
                                    <a href="aboutus.html">About Us</a>
                                    <a href="aboutus.html">Our Mission</a>
                                    <a href="aboutus.html">Our Vision</a>
                                    <a href="aboutus.html">Meet The Team</a>
                                    <a href="#">Terms of Use</a>
                                    <a href="Privacy Policy"></a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="footernav2">
                                    <span>Who We Serve</span>
                                    <a href="#">Job Seeker</a>
                                    <a href="#">Employers</a>
                                    <a href="#">Trainees</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="footernav3">
                                    <span>Resources</span>
                                    <a href="#">Blog</a>
                                    <a href="#">Courses</a>
                                    <a href="#">Contact Us</a>
                                    <a href="#">FAQ</a>
                                    <a href="#">Resource Center</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-7 copyright">
                <span>©</span>
                <span>2020 ConnectMe, Inc. All rights reserved </span>
                <span><a href="#">Terms of use</a></span>
                <span><a href="#">Privacy Policy</a></span>
            </div>
        </div>

        <!-- END: FOOTER -->
    </footer>

    <script src="JavaScript/postajob.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>