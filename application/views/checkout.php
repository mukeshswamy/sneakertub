<?php include('header.php');

// echo $size;
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<p class="checkoutHead">Checkout</p>
			</div>
			<input type="hidden" value="<?php echo $this->session->userdata('userid')?>" id="uid">
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="summary">ORDER SUMMARY</h4>
				<div>
					<span class="box" id="product_name"><?php echo $Product_name?></span>
					<p style="margin-bottom: 0px;">
						<span>Sneaker Size: </span><span id="size"><?php echo $size?></span>
					</p>
					<p style="margin-bottom: 0px;">
						<span>Quantity: </span><span id="pquan"><?php echo $quantity?></span>
					</p>
					<p style="margin-bottom: 0px;">
						<span>Number of days for rent: </span><span id="pdays"><?php echo $rent_days?></span>
					</p>
				</div>
				<div class="dropdown-divider" style="border-top: 1px solid #000000;"></div>
				<div>
					<div class="cus-row">
						<div class="col-md-cus">
							<p style="font-size: 32px;">Total</p>
						</div>
						<div class="col-md-50">
							<span>&#x20b9; </span><span id="pprize"><?php echo $Product_prize?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<form class="add-form">
					<div class="form-group">
						<label for="address">Address-Line 1</label>
						<input type="text" class="form-control" id="p_add-1" name="address1" aria-describedby="address"
							placeholder="Address-Line 1">
					</div>
					<div class="form-group">
						<label for="address">Address-Line 2</label>
						<input type="text" class="form-control" id="p_add-2" name="address2"
							placeholder="Address-line 2">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Phone Number</label>
						<input type="tel" class="form-control" id="p_tel" name="contact" aria-describedby="tel"
							placeholder="Phone Number">
					</div>
					<?php if($this->session->userdata('status') == 1){?>
					<button type="button" class="btn btn-danger" id="ckrent" style="margin-top: 20px;">Checkout</button>
					<button type="button" id="ckrent1" class="btn btn-secondary" style="margin-top: 20px;">Add to
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

<?php include('footer.php');?>