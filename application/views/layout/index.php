<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 11:21:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheFace - Mỹ phẩm số 1 Việt Nam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="<?= base_url('assets/images/favicon.ico') ?>" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/iconfont.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/helper.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>

<body>

    <div id="main-wrapper">


        <?= $this->_data['header']; ?>
        <?= $this->_data['main_content']; ?>
        <?= $this->_data['footer']; ?>


        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-lg-image-1 tf-element-carousel" data-slick-options='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "asNavFor": ".slider-thumbs-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }'>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-1.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-2.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-3.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-4.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel" data-slick-options='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".slider-lg-image-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }' data-slick-responsive='[
                                            {"breakpoint":991, "settings": {
                                                "slidesToShow": 3
                                            }},
                                            {"breakpoint":767, "settings": {
                                                "slidesToShow": 4
                                            }},
                                            {"breakpoint":479, "settings": {
                                                "slidesToShow": 2
                                            }}
                                        ]'>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <!-- product detail content -->

                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>White Shave Brux</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button class="product-add-btn" data-text="add to cart">add to cart</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="wishlist-compare-btn">
                                            <a href="#" class="wishlist-btn mb-md-10 mb-sm-10">Add to Wishlist</a>
                                            <a href="#" class="add-compare">Compare</a>
                                        </div>
                                        <div class="product-meta">
                                            <span class="posted-in">
                                                Categories:
                                                <a href="#">Accessories</a>,
                                                <a href="#">Electronics</a>
                                            </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->

                                    <!-- End of product detail content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Area End -->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <script>
        $(document).ready(function() {
            $('.add_cart').click(function() {
                // alert('Hello');
                var id = $(this).data("masp");
                var name = $(this).data("tensp");
                var price = $(this).data("dongia");
                var qty = $(this).data("qty");
                // var product_name = $(this).data("product_name");
                // var product_name = $(this).data("product_name");
                // var product_id    = $(this).data("productid");
                // console.log('gio hang', masp, tensp, dongia, anh);
                $.ajax({
                    url: "<?php echo base_url(); ?>shopping_cart/add",
                    method: "POST",
                    data: {
                        id,
                        name,
                        price,
                        qty
                    },
                    success: function(data) {
                        alert("Product Added into Cart");
                        $('#cart_details').html(data);
                        // $('#' + masp).val('');
                    }
                });
            })

            $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

            $(document).on('click', '.remove_inventory', function() {
                var row_id = $(this).attr("id");
                if (confirm("Are you sure you want to remove this?")) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>shopping_cart/remove",
                        method: "POST",
                        data: {
                            row_id: row_id
                        },
                        success: function(data) {
                            alert("Product removed from Cart");
                            $('#cart_details').html(data);
                        }
                    });
                } else {
                    return false;
                }
            });

            $(document).on('click', '#clear_cart', function() {
                if (confirm("Are you sure you want to clear cart?")) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>shopping_cart/clear",
                        success: function(data) {
                            alert("Your cart has been clear...");
                            $('#cart_details').html(data);
                        }
                    });
                } else {
                    return false;
                }
            });

        })
    </script>

</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 11:21:49 GMT -->

</html>