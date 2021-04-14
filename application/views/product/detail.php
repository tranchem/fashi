<!-- Single Product Section Start -->
<div class="single-product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
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
                        <?php foreach ($sp as $key => $value) : ?>


                            <div class="lg-image">
                                <img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh'] ?>" alt="">
                                <a href="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh'] ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                            </div>
                            <div class="lg-image">
                                <img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh1'] ?>" alt="">
                                <a href="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh1'] ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                            </div>
                            <div class="lg-image">
                                <img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh2'] ?>" alt="">
                                <a href="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh2'] ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                            </div>
                            <div class="lg-image">
                                <img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh3'] ?>" alt="">
                                <a href="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh3'] ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                            </div>
                            <div class="lg-image">
                                <img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh4'] ?>" alt="">
                                <a href="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh4'] ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
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
                        <div class="sm-image"><img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh'] ?>" alt="product image thumb"></div>
                        <div class="sm-image"><img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh1'] ?>" alt="product image thumb"></div>
                        <div class="sm-image"><img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh2'] ?>" alt="product image thumb"></div>
                        <div class="sm-image"><img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh3'] ?>" alt="product image thumb"></div>
                        <div class="sm-image"><img src="<?php echo base_url() ?>assets/images/product/large-product/<?php echo $value['Anh4'] ?>" alt="product image thumb"></div>
                    </div>
                </div>
            <?php endforeach ?>

            </div>
            <div class="col-md-7">

                <div class="product-details-content">

                    <div class="product-nav">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!--Product Nav End-->
                    <?php foreach ($sp as $key => $value) : ?>


                        <h2><?php echo $value['TenSP'] ?></h2>
                        <div class="single-product-reviews">

                        </div>
                        <div class="single-product-price">
                            <span class="price new-price"><?php echo $value['DonGia'] ?> VND</span>
                        </div>
                        <div class="product-description">
                            <p><?php echo $value['MoTa'] ?></p>
                        </div>
                    <?php endforeach ?>
                    <div class="single-product-quantity">
                        <form class="add-quantity" action="#">
                            <div class="product-quantity">
                                <input value="1" type="number" id="<?= $value['MaSP'] ?>">
                            </div>
                            <div class="add-to-link">
                                <a class="product-add-btn add_cart" href="#" data-masp="<?= $value['MaSP'] ?>" data-tensp="<?= $value['TenSP'] ?>" data-dongia="<?= $value['DonGia'] ?>" data-qty="1">
                                    Thêm vào giỏ hàng
                                </a>
                                <!-- <button class="product-add-btn" data-text="add to cart">Thêm vào giỏ hàng</button> -->
                            </div>
                        </form>
                    </div>

                    <div class="product-meta">

                    </div>
                    <div class="single-product-sharing">
                        <h3>Chia sẻ sản phẩm này</h3>
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
            </div>
        </div>
    </div>
</div>
<!-- Single Product Section End -->

<!--Product Description Review Section Start-->
<div class="product-description-review-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-review-tab">
                    <!--Review And Description Tab Menu Start-->
                    <ul class="nav dec-and-review-menu">
                        <li>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews">Đánh giá (1)</a>
                        </li>
                    </ul>
                    <!--Review And Description Tab Menu End-->
                    <!--Review And Description Tab Content Start-->
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">
                            <div class="single-product-description">
                                <p></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="review-page-comment">
                                <ul>
                                    <li>
                                        <div class="product-comment">
                                            <img src="assets/images/icons/author.png" alt="">
                                            <?php foreach ($cmt as $key => $value) : ?>


                                                <div class="product-comment-content">

                                                    <p class="meta">
                                                        <strong>
                                                            <p><?php echo $value['Ten'] ?></p>
                                                        </strong> - <span><?php echo $value['Ngay'] ?></span>
                                                    <div class="description">
                                                        <p><?php echo $value['NoiDung'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </li>
                                </ul>
                                <?php foreach ($sp as $key => $value) : ?>
                                    <div class="review-form-wrapper active">
                                        <div class="review-form active">
                                            <form action="BinhLuan/<?php echo $value['MaSP'] ?>" method="POST">
                                                <div class="input-element">
                                                    <div class="comment-form-comment">
                                                        <label>Nội dung</label>
                                                        <textarea name="noidung" cols="40" rows="8"></textarea>
                                                    </div>
                                                    <div class="review-comment-form-author">
                                                        <label>Tên </label>
                                                        <input required="required" name="ten" type="text">
                                                    </div>
                                                    <div class="comment-submit">
                                                        <button type="submit" class="form-button">Bình luận</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <!--Review And Description Tab Content End-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">

</div>

<div class="product-section section pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">

</div>
<!--Product section end-->

<!--Brand section start-->
<div class="brand-section section border-top pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">

            <!--Brand Slider start-->
            <div class="tf-element-carousel section" data-slick-options='{
        "slidesToShow": 5,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": false,
        "autoplay": true
    }' data-slick-responsive='[
    {"breakpoint":1199, "settings": {
    "slidesToShow": 4
}},
{"breakpoint":992, "settings": {
"slidesToShow": 4
}},
{"breakpoint":768, "settings": {
"slidesToShow": 3
}},
{"breakpoint":576, "settings": {
"slidesToShow": 1
}}
]'>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-1.png" alt=""></a></div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-2.png" alt=""></a></div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-3.png" alt=""></a></div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-4.png" alt=""></a></div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-5.png" alt=""></a></div>
            </div>
            <!--Brand Slider end-->

        </div>
    </div>
</div>
<!--Brand section end-->