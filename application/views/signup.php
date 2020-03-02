<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php base_url();?>assets/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <title>Login | Signup</title>
    <style>
        .header-login {
            background-color: #ee4141;
            width: 100%;
            padding: 10px;
            color: white;
        }

        .welcome {
            text-align: center;
            margin: 0 auto;
        }

        .mt-top-40 {
            margin-top: 40px;
            padding-bottom: 40px;
        }

        .nav-tabs {
            border-bottom: none !important;
        }

        .cus-margin {
            margin: 0 auto;
            width: fit-content;
        }

        .pd-ryt-100-li {
            padding-right: 100px;
        }

        .pd a {
            font-size: 33px;
            color: black !important;
        }

        .nav-link.active {
            color: #ee4141 !important;
            background-color: #fff;
            border-color: transparent !important;
        }

        .nav-link:hover {
            border-color: transparent !important;
        }

        .form-con {
            max-width: 500px !important;
            padding-top: 30px !important;
            margin: auto !important;
        }
    </style>
</head>

<body>
    <header class="header-login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome">
                        <h1>WELCOME TO SNEAKERTUB</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-top-40 ">
                    <div>
                        <ul class="nav nav-tabs cus-margin" id="myTab" role="tablist">
                            <li class="nav-item pd-ryt-100-li pd">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item pd">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Signup</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Loginup -->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="form-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="log_email"
                                                            aria-describedby="emailHelp" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="log_password"
                                                            placeholder="Password">
                                                    </div>
                                                </form>
                                                <button type="button" id="login" class="btn btn-danger">Let Me
                                                    In..</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Signup -->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            placeholder="Full Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Password</label>
                                                        <input type="Password" class="form-control" id="password"
                                                            placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Confirm Password</label>
                                                        <input type="Password" class="form-control" id="cpassword"
                                                            placeholder="Confirm Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Phone Number</label>
                                                        <input type="tel" class="form-control" id="pnumber"
                                                            placeholder="Phone Number">
                                                    </div>
                                                </form>
                                                <button type="submit" id="signup" class="btn btn-danger">Lets
                                                    Go..</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('footer.php');?>