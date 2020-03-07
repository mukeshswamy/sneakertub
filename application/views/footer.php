<section class="footer-bg">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-btn">
                    <?php if ($this->session->userdata('status') == 1) { ?>
                        <a href="<?php echo base_url(); ?>subscribe">
                            <button type="button" class="btn btn-danger btn-danger-cus btn-lg btn-lg-cus cus-footer-but">Subscribe</button></a>
                    <?php } else { ?>
                        <button type="button" class="btn btn-danger btn-danger-cus btn-lg btn-lg-cus cus-footer-but" disabled>Subscribe</button>
                    <?php } ?>

                </div>
                <div class="col-md-6 footer-got-queston">
                    <div>
                        <p style="color: white;">Got Questions?</p>
                        <p style="color: white;">hello@sneakertub.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>



<!-- JS SCRIPT FROM HERE -->
<script>
    $(document).ready(function() {
        $("#signup").click(function() {
            var fd = new FormData();
            fd.append("name", $("#fullname").val());
            fd.append("email", $("#email").val());
            fd.append("contact", $("#pnumber").val());
            fd.append("password", $("#password").val());
            fd.append("password_confirm", $("#cpassword").val());
            console.log("fd", fd)
            $.ajax({
                url: 'http://localhost/sneakertub/User/signin',
                type: 'POST',
                cache: false,
                data: fd,
                processData: false,
                contentType: false,
                success: function(responce) {
                    console.log(responce);
                    if (responce['status_code'] == 201) {
                        var id = responce['id'];
                        location.href = "http://localhost/sneakertub/?id=" + id;
                    }
                },
                error: function(jqXHR) {
                    alert(jqXHR.responseJSON.validation_message);
                }
            });
        });

        $("#login").click(function() {
            var fd = new FormData();
            fd.append("email", $("#log_email").val());
            fd.append("password", $("#log_password").val());
            console.log("fd", fd)
            $.ajax({
                url: 'http://localhost/sneakertub/User/login',
                type: 'POST',
                cache: false,
                data: fd,
                processData: false,
                contentType: false,
                success: function(responce) {
                    console.log(responce);
                    if (responce['status_code'] == 202) {
                        var id = responce['uid'];
                        location.href = "http://localhost/sneakertub/?id=" + id;
                    }
                },
                error: function(jqXHR) {
                    alert(jqXHR.responseJSON.reason);
                }
            });
        });
    });

    function showprocess(val) {
        location.href = "process/" + val;
    }

    function btn(val, name, prize) {
        console.log(val, name, prize);
        $("#term").val(name);
        $("#term-prize").val(prize);
        $("#Terms-tab").removeClass('active');
        $("#Gender-tab").addClass('active');
        $("#Terms").removeClass('show');
        $("#Terms").removeClass('active');
        $("#Gender").addClass('active');
        $("#Gender").addClass('show');
    }

    function btn2(val, name) {
        console.log(val, name);
        $("#gender").val(name);
        $("#Gender-tab").removeClass('active');
        $("#Sneaker-Size-tab").addClass('active');
        $("#Gender").removeClass('show');
        $("#Gender").removeClass('active');
        $("#Sneaker-Size").addClass('active');
        $("#Sneaker-Size").addClass('show');
    }

    function btn3(val) {
        console.log(val);
        $("#sneaker_size").val(val);
        $("#Sneaker-Size-tab").removeClass('active');
        $("#shirt-size-tab").addClass('active');
        $("#Sneaker-Size").removeClass('show');
        $("#Sneaker-Size").removeClass('active');
        $("#shirt-size").addClass('active');
        $("#shirt-size").addClass('show');
    }

    function btn4(val) {
        console.log(val);
        $("#shirt_size").val(val);
        $("#shirt-size-tab").removeClass('active');
        $("#Checkout-tab").addClass('active');
        $("#shirt-size").removeClass('show');
        $("#shirt-size").removeClass('active');
        $("#Checkout").addClass('active');
        $("#Checkout").addClass('show');
        // var da = $("#term").val();
        $("#term-add").html($("#term").val());
        $("#Tprize").html($("#term-prize").val());
        $("#gen").html($("#gender").val());
        $("#size").html($("#sneaker_size").val());
        $("#srt-size").html($("#shirt_size").val());
        var term = $("#term").val();
        var gender = $("#gender").val();
        var sneaker_size = $("#sneaker_size").val();
        var shirt_size = $("#shirt_size").val();
    }

    $("#checkout").click(function() {
        var fd = new FormData();
        var id = $("#id").val();
        fd.append("term", $("#term").val());
        fd.append("gender", $("#gender").val());
        fd.append("sneaker_size", $("#sneaker_size").val());
        fd.append("shirt_size", $("#shirt_size").val());
        fd.append("term_prize", $("#term-prize").val());
        fd.append("product_name", $("#product_name").html());
        fd.append("address1", $("#add-1").val());
        fd.append("address2", $("#add-2").val());
        fd.append("contact", $("#tel").val());
        $.ajax({
            url: 'http://localhost/sneakertub/index.php/User/Billing/' + id,
            type: 'POST',
            cache: false,
            data: fd,
            processData: false,
            contentType: false,
            success: function(responce) {
                console.log(responce);
                if (responce['status_code'] == 201) {
                    alert("order Placed");
                    // location.href = "http://localhost/sneakertub/?id=" + id;
                    location.href = "http://localhost/sneakertub/pdf";
                }
            },
            error: function(jqXHR) {
                alert(jqXHR.responseJSON.validation_message);
            }
        });
    });

    function myFunction(imgs) {
        var expandImg = document.getElementById("setImg");
        expandImg.src = imgs.src;
        expandImg.parentElement.style.display = "block";
    }
    $("#inputGroupSelect01").change(function(event) {
        var met = $('#inputGroupSelect01 :selected').text();
        console.log($('#inputGroupSelect01 :selected').text());
    });
    $("#inputGroupSelect02").change(function(event) {
        console.log($('#inputGroupSelect02 :selected').text());
    });
    $("#inputGroupSelect03").change(function(event) {
        console.log($('#inputGroupSelect03 :selected').text());
    });

    function test() {
        location.href = "http://localhost/sneakertub/checkout";
    }
</script>


</body>

</html>