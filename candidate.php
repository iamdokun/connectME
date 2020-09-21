<?php
include "database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Register/Login | ConnectME</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/candidate.css">
</head>

<body>
    <div class="container-fluid contain">
        <!-- START: Top Logo, Search Bar & Nav Bar -->
        <header>
            <!-- Image and text -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/logonotext-01.png" width="70" height="40" class="d-inline-block align-top" alt=""
                        loading="lazy">
                    <span class="align-middle">Connect<span class="spanme">Me</span></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item active mx-2">
                            <a class="nav-link" href="#">Resources <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
                <div class="rightmenu inline my-2 my-lg-0 mr-5">
                    <a href="" class="postajob mx-2 my-lg-0">Post A Job</a>
                    <a href="" class="login mx-2 my-lg-0">Log In</a>
                    <button class="btn btnsignup ml-2 my-sm-0" type="submit">Sign Up</button>
                </div>
            </nav>
        </header>
        <!-- END: Top Logo, Search Bar & Nav Bar -->

        <!-- START: FORM AREA -->
        <div class="radiobox mt-5">
            <div class="form-check checkinline">
                <label class="form-check-label labeltop" for="inlineRadio1">Employer</label>
                <input class="form-check-input inputbelow ml-4" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="employer" checked>
            </div>
            <div class="form-check checkinline radioseeker">
                <label class="form-check-label labeltop" for="inlineRadio2">Job Seeker</label>
                <input class="form-check-input inputbelow ml-4" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="jobseeker">
            </div>
            <div class="form-check checkinline">
                <label class="form-check-label labeltop" for="inlineRadio3">Trainee</label>
                <input class="form-check-input inputbelow ml-4" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                    value="trainee">
            </div>
        </div>
        <!-- END OF RADIO SELECTOR AREA -->
        <!-- FORM HEADING -->
        <div class="createbox my-4">
            <h4>Create Your FREE ConnectMe Account</h4>
            <p>A click away to beginning your new career</p>
        </div>
        <div class="information">
            <div class="personal">
                <h5 class="px-3 py-2">Personal Information</h5>
            </div>
            <form class="needs-validation info-form py-3 employee" novalidate>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm mb-3">
                        <label for="validationCustom03">Email address</label>
                        <input type="email" class="form-control" id="validationCustom03" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="validationCustom04">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control" id="validationCustom04" value="" maxlength="15"
                                required>
                            <div class="input-group-append">
                                <div class="input-group-text showhide">
                                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <small id="passwordHelpInline" class="text-muted">
                            Must be 8-15 characters long.
                        </small>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="validationCustom05">Confirm password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control" id="validationCustom05" value="" maxlength="15"
                                required>
                            <div class="input-group-append">
                                <div class="input-group-text showhide">
                                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <small id="passwordHelpInline" class="text-muted">
                            Repeat password for verification.
                        </small>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="validationCustom06">Date of Birth</label>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <select class="custom-select" id="validationCustom06" required>
                            <option selected disabled value="">Day</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid day.
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <!-- <label for="validationCustom07"></label> -->
                        <select class="custom-select" id="validationCustom07" required>
                            <option selected disabled value="">Month</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid month.
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <!-- <label for="validationCustom08"></label> -->
                        <select class="custom-select" id="validationCustom08" required>
                            <option selected disabled value="">Year</option>
                            <option>1980</option>
                            <option>1981</option>
                            <option>1982</option>
                            <option>1983</option>
                            <option>1984</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1988</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid year.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="validationCustom07">Gender</label>
                        <select class="custom-select" id="validationCustom08" required>
                            <option selected disabled value="">Select gender</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Prefer not to say</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid day.
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="validationCustom09">Location</label>
                        <select class="custom-select" id="validationCustom09" required>
                            <option selected disabled value="">Select LGA/LCDA</option>
                            <option>Agege</option>
                            <option>Epe</option>
                            <option>Eti Osa</option>
                            <option>Ifako Ijaiye</option>
                            <option>Ikeja</option>
                            <option>Ikorodu</option>
                            <option>Ikoyi</option>
                            <option>Ketu</option>
                            <option>Kosofe</option>
                            <option>Mainland</option>
                            <option>Lagos Island</option>
                            <option>Ojodu</option>
                            <option>Surulere</option>
                            <option>Victoria Island</option>
                            <option>Yaba</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid month.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm mb-3">
                        <label for="inlineFormInputGroupUsername2">Mobile number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+234</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" value=""
                                maxlength="11" required>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="col-sm text-center my-3">
                    <button class="btn nextbtn" type="submit">NEXT</button>
                </div>
                <div class="text-group text-center">
                        <span class="label">Already have an account?</span>
                        <a href="" class="login mx-3 my-lg-0">Log In</a>
                </div>
            </form>
        </div>
        <!-- END: FORM AREA -->

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
                                        <a href="#">About Us</a>
                                        <a href="#">Our Mission</a>
                                        <a href="#">Our Vision</a>
                                        <a href="#">Meet The Team</a>
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
        </footer>
    </div>
    <script src="JavaScript/candidate.js"></script>
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