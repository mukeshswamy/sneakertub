<section class="process-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- add this -> data-toggle="pill" and href="#shirt-size" to toggle -->
                <ul class="nav nav-pills mb-3 cus-ul-style" id="pills-tab" role="tablist">
                    <li class="nav-item cus-li-style">
                        <a class="nav-link active" id="Terms-tab" role="tab" aria-controls="Terms"
                            aria-selected="true">Terms</a>
                    </li>
                    <li class="nav-item cus-li-style">
                        <a class="nav-link" id="Gender-tab" role="tab" aria-controls="Gender"
                            aria-selected="false">Gender</a>
                    </li>
                    <li class="nav-item cus-li-style">
                        <a class="nav-link" id="Sneaker-Size-tab" role="tab" aria-controls="Sneaker-Size"
                            aria-selected="false">Sneaker Size</a>
                    </li>
                    <li class="nav-item cus-li-style">
                        <a class="nav-link" id="shirt-size-tab" role="tab" aria-controls="shirt-size"
                            aria-selected="false">Shirt Size
                        </a>
                    </li>
                    <li class="nav-item cus-li-style">
                        <a class="nav-link" id="Checkout-tab" role="tab" aria-controls="Checkout"
                            aria-selected="false">Checkout</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- Term Tab -->
                    <div class="tab-pane fade show active" id="Terms" role="tabpanel" aria-labelledby="Terms-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12"
                                    style="padding-bottom: 50px; text-align:center; color: rgb(238, 65, 65)">
                                    <h1><?php print_r($tub[0]['tub_name'])?></h1>
                                </div>
                            </div>
                            <input type="hidden" id="term">
                            <input type="hidden" id="term-prize">
                            <div class="row" style="padding-bottom: 50px;">
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/m1.jpg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>Month to Month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$99.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn(1,'Month to Month',99.99)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/3m.jpg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>3 Month Prepay</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$299.97</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn(2,'3 Month Prepay',299.97)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/6m.jpg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>6 Month Prepay</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$599.94</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn(3,'6 Month Prepay',599.94)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gender Tab -->
                    <div class="tab-pane fade" id="Gender" role="tabpanel" aria-labelledby="Gender-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12"
                                    style="padding-bottom: 50px; text-align:center; color: rgb(238, 65, 65)">
                                    <h1>Gender</h1>
                                </div>
                            </div>
                            <input type="hidden" id="gender">
                            <div class="cus-con-gender">
                                <div class="row" style="padding-bottom: 50px;">
                                    <div class="col-md-6">
                                        <div class="cus-container-white">
                                            <div class="">
                                                <img src="<?php echo base_url();?>assets/images/men.jpeg"
                                                    style="width: 100%;" alt="size">
                                            </div>
                                            <div class="container step-text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span>Male</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span>Male's tub</span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 sub-text">
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="btn2(1,'Male')">SELECT</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cus-container-white">
                                            <div class="">
                                                <img src="<?php echo base_url();?>assets/images/women.jpeg"
                                                    style="width: 100%;" alt="size">
                                            </div>
                                            <div class="container step-text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span>Women</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="container step-text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span>Women's tub</span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 sub-text">
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="btn2(2,'Women')">SELECT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Size Tab -->
                    <div class="tab-pane fade" id="Sneaker-Size" role="tabpanel" aria-labelledby="Sneaker-Size-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12"
                                    style="padding-bottom: 50px; text-align:center; color: rgb(238, 65, 65)">
                                    <h1>Sneaker Size</h1>
                                </div>
                            </div>
                            <input type="hidden" id="sneaker_size">
                            <!-- Row 1 -->
                            <div class="row" style="padding-bottom: 50px;">
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/9.jpeg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>9</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$99.99</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn3(9)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/9_5.jpeg"
                                                style="width: 100%;" alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>9.5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$299.97</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn3(9.5)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/10.jpeg"
                                                style="width: 100%;" alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>10</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$599.94</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn3(10)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="row" style="padding-bottom: 50px;">
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/11.jpeg"
                                                style="width: 100%;" alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>10.5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$99.99</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn3(10.5)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/10_5.jpeg"
                                                style="width: 100%;" alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>11</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$299.97</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn3(11)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/11_5.jpeg"
                                                style="width: 100%;" alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>11.5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$599.94</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn3(11.5)">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Row 3 -->
                            <div class="container">
                                <div class="cus-con-gender">
                                    <div class="row" style="padding-bottom: 50px;">
                                        <div class="col-md-6">
                                            <div class="cus-container-white">
                                                <div class="">
                                                    <img src="<?php echo base_url();?>assets/images/12.jpeg"
                                                        style="width: 100%;" alt="size">
                                                </div>
                                                <div class="container step-text">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>12</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12 sub-text">
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="btn3(12)">SELECT</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="cus-container-white">
                                                <div class="">
                                                    <img src="<?php echo base_url();?>assets/images/13.jpeg"
                                                        style="width: 100%;" alt="size">
                                                </div>
                                                <div class="container step-text">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>13</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12 sub-text">
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="btn3(13)">SELECT</button>
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
                    <!-- Shirt Size Tab -->
                    <div class="tab-pane fade" id="shirt-size" role="tabpanel" aria-labelledby="shirt-size-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12"
                                    style="padding-bottom: 50px; text-align:center; color: rgb(238, 65, 65)">
                                    <h1>Shirt Size</h1>
                                </div>
                            </div>
                            <input type="hidden" id="shirt_size">
                            <!-- Row 1 -->
                            <div class="row" style="padding-bottom: 50px;">
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/s.jpeg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>SMALL</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$99.99</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn4('SMALL')">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/m.jpeg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>MEDIUM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$299.97</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn4('MEDIUM')">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cus-container-white">
                                        <div class="">
                                            <img src="<?php echo base_url();?>assets/images/L.jpeg" style="width: 100%;"
                                                alt="size">
                                        </div>
                                        <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>LARGE</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container step-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>$599.94</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 sub-text">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="btn4('LARGE')">SELECT</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="container">
                                <div class="cus-con-gender">
                                    <div class="row" style="padding-bottom: 50px;">
                                        <div class="col-md-6">
                                            <div class="cus-container-white">
                                                <div class="">
                                                    <img src="<?php echo base_url();?>assets/images/xl.jpeg"
                                                        style="width: 100%;" alt="size">
                                                </div>
                                                <div class="container step-text">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>XL</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12 sub-text">
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="btn4('XL')">SELECT</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="cus-container-white">
                                                <div class="">
                                                    <img src="<?php echo base_url();?>assets/images/xxl.jpeg"
                                                        style="width: 100%;" alt="size">
                                                </div>
                                                <div class="container step-text">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span>XXL</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12 sub-text">
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="btn4('XXL')">SELECT</button>
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
                    <!-- Checkout -->
                    <div class="tab-pane fade" id="Checkout" role="tabpanel" aria-labelledby="Checkout-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <h3 class="summary">ORDER SUMMARY</h3>
                                    <div>
                                        <span class="box" id="product_name"><?php print_r($tub[0]['tub_name'])?></span>
                                        <p style="margin-bottom: 0px; margin-top: 10px;">1 delivery, auto-renewing</p>
                                        <p style="margin-bottom: 0px; margin-top: 10px;" id="term-add"></p>
                                        <p style="margin-bottom: 0px;"><span>Gender: </span><span id="gen"></span>
                                        </p>
                                        <p style="margin-bottom: 0px;"><span>Sneaker Size: </span><span
                                                id="size"></span></p>
                                        <p style="margin-bottom: 0px;"><span>Shirt Size: </span><span
                                                id="srt-size"></span></p>
                                    </div>
                                    <div class="dropdown-divider" style="border-top: 1px solid #000000;"></div>
                                    <div>
                                        <div class="cus-row">
                                            <div class="col-md-cus">
                                                <p style="font-size: 32px;">Total</p>
                                            </div>
                                            <div class="col-md-50">
                                                <span>&#x20b9; </span><span id="Tprize"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <form class="add-form">
                                        <div class="form-group">
                                            <label for="address">Address-Line 1</label>
                                            <input type="text" class="form-control" id="add-1" name="address1"
                                                aria-describedby="address" placeholder="Address-Line 1">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address-Line 2</label>
                                            <input type="text" class="form-control" id="add-2" name="address2"
                                                placeholder="Address-line 2">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="tel" class="form-control" id="tel" name="contact"
                                                aria-describedby="tel" placeholder="Phone Number">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Make this a gift</label>
                                        </div>
                                        <?php if($this->session->userdata('status') == 1){?>
                                        <button type="submit" class="btn btn-danger" id="checkout"
                                            style="margin-top: 20px;">Checkout</button>
                                        <button type="button" class="btn btn-secondary" style="margin-top: 20px;">Add to
                                            cart</button>
                                        <?php }else{?>
                                        <div>
                                            Your are not currently logged in!!!!
                                        </div>
                                        <?php }?>
                                    </form>
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