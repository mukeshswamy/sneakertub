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
        <!-- <?php print_r($id) ?> -->
        <?php
        $tumbnailImg = json_decode($getRentProduct[0]['productsImage'], true);
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" id="setImg" src="<?php echo base_url(); ?>assets/images/<?php print_r($tumbnailImg['p1']) ?>" alt="Card image cap" />
                </div>
                <div class="row" style="margin-bottom: 40px;">
                    <div class="col-md-3">
                        <img src="<?php echo base_url(); ?>assets/images/<?php print_r($tumbnailImg['p1']) ?>" onclick="myFunction(this)" ; alt="1" class="productgallery" />
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url(); ?>assets/images/<?php print_r($tumbnailImg['p2']) ?>" onclick="myFunction(this)" ; alt="2" class="productgallery" />
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url(); ?>assets/images/<?php print_r($tumbnailImg['p3']) ?>" onclick="myFunction(this)" ; alt="3" class="productgallery" />
                    </div>
                    <?php if ($tumbnailImg['p4'] != null) { ?>
                        <div class="col-md-3">
                            <img src="<?php echo base_url(); ?>assets/images/<?php print_r($tumbnailImg['p4']) ?>" onclick="myFunction(this)" ; alt="4" class="productgallery" />
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <p class="rent-product-name"><?php print_r($getRentProduct[0]['productName']) ?></p>
                <p class="rent-prize">&#x20b9;:<?php print_r($getRentProduct[0]['productPrice']) ?></p>
                <div class="input-group cus-mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01" style="color: rgb(238, 65, 65);">Sneaker Size:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option value="select" selected disabled>--select--</option>
                        <option value="10">10</option>
                        <option value="10.5">10.5</option>
                        <option value="11">11</option>
                        <option value="11.5">11.5</option>
                    </select>
                </div>
                <div class="input-group cus-mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect02" style="color: rgb(238, 65, 65);">Quantity:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02">
                        <option value="select" selected disabled>--select--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="input-group cus-mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect03" style="color: rgb(238, 65, 65);">Number of days for rent:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03">
                        <option value="select" selected disabled>--select--</option>
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
                <!-- <a href="<?php echo base_url(); ?>checkout"> -->
                    <button type="button" class="btn btn-danger btn-lg" style="width: 100%;" onclick="test()">Rent Now..</button>
                <!-- </a> -->
            </div>
        </div>
    </div>
    </div>
</section>

<?php include('footer.php'); ?>