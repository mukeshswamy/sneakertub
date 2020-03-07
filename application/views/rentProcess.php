<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-al">
                <p>RENT</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" id="setImg" src="<?php echo base_url();?>assets/images/s1.jpeg"
                        alt="Card image cap" />
                </div>
                <div class="row" style="margin-bottom: 40px;">
                    <div class="col-md-3">
                        <img src="<?php echo base_url();?>assets/images/s1.jpeg" onclick="myFunction(this)"; alt="1" class="productgallery" />
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url();?>assets/images/cream1.jpeg" onclick="myFunction(this)"; alt="2" class="productgallery" />
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url();?>assets/images/cream2.jpeg" onclick="myFunction(this)"; alt="3" class="productgallery" />
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url();?>assets/images/cream3.jpeg" onclick="myFunction(this)"; alt="4" class="productgallery" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="rent-product-name">Puma Clyde Natural - Vachetta</p>
                <p class="rent-prize">$89.99</p>
                <div class="input-group cus-mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01" style="color: rgb(238, 65, 65);">Sneaker Size:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option value="10">10</option>
                        <option value="10.5">10.5</option>
                        <option value="11">11</option>
                        <option value="11.5">11.5</option>
                    </select>
                </div>
                <div class="input-group cus-mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01" style="color: rgb(238, 65, 65);">Quantity:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="input-group cus-mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01" style="color: rgb(238, 65, 65);">Number of days for rent:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <a href="<?php echo base_url();?>subscribe">
                    <button type="button" class="btn btn-danger btn-lg" style="width: 100%;">Rent Now..</button>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>

<?php include('footer.php'); ?>