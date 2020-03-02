<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>My Shoe Tub</title>
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
</head>

<body>
    <!-- <?php
    $dem =$this->session->userdata('userid');
    echo $dem;

    ?> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <img src="<?php echo base_url() ;?>assets/images/head.jpg" class="head-img" alt="header-img">
                    <input type="hidden" id="id" value="<?php echo($this->session->userdata('userid')) ?>">
                </div>
            </div>
            <nav class="cus-nav">
                <ul class="cus-ul">
                    <?php if($this->session->userdata('status') == 1){ ?>
                    <li>
                        <h3 style="color: rgb(238, 65, 65);;">Hello <?php echo( $this->session->userdata('username'));?>
                        </h3>
                    </li>
                    <?php }?>
                    <li><a href="<?php echo base_url();?>subscribe">JOINNOW</a></li>
                    <li><a href="<?php echo base_url();?>aboutus">ABOUTUS</a></li>
                    <li><a href="<?php echo base_url();?>faq">FAQ</a></li>
                    <li>
                        <a
                            href="#">CART<span><?php if($this->session->userdata('cart')==1){?>(1)<?php }else{?>(0)<?php }?></span></a>
                    </li>
                    <?php if($this->session->userdata('status') == 1){ ?>
                    <li><a href="<?php echo base_url();?>User/Logout">LOGOUT</a></li>
                    <?php }else{ ?>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal2">SIGNUP</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal">LOGIN</a></li>
                    <?php }?>

                </ul>
            </nav>

        </div>
    </div>


    <!-- Modal-For-Login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login to Sneakertub</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="log_email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="log_password" placeholder="Password">
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="login" class="btn btn-danger">Let Me In..</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal-For-signup -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signup to Sneakertub</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="Password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Confirm Password</label>
                            <input type="Password" class="form-control" id="cpassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Phone Number</label>
                            <input type="tel" class="form-control" id="pnumber" placeholder="Phone Number">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="signup" class="btn btn-danger">Lets Go..</button>
                </div>
            </div>
        </div>
    </div>