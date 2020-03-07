<?php include('header.php');?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<p class="checkoutHead">Checkout</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="summary">ORDER SUMMARY</h4>
				<div>
					<span class="box" id="product_name"
						>Name will come here</span
					>
					<p style="margin-bottom: 0px; margin-top: 10px;">
						1 delivery, auto-renewing
					</p>
					<p style="margin-bottom: 0px; margin-top: 10px;" id="term-add"></p>
					<p style="margin-bottom: 0px;">
						<span>Gender: </span><span id="gen"></span>
					</p>
					<p style="margin-bottom: 0px;">
						<span>Sneaker Size: </span><span id="size"></span>
					</p>
					<p style="margin-bottom: 0px;">
						<span>Shirt Size: </span><span id="srt-size"></span>
					</p>
				</div>
				<div
					class="dropdown-divider"
					style="border-top: 1px solid #000000;"
				></div>
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
			<div class="col-md-6">
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
</section>
