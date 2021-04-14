 <!-- Shop Section Start -->
 <div class="shop-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 order-lg-2 order-1">
                 <div class="row">
                     <div class="col-12">
                         <div class="shop-banner-title">
                             <h2><?= $category[0]['ten_dm'] ?></h2>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <!-- Grid & List View Start -->
                         <div class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
                             <!-- <div class="grid-list-option">
                                 <ul class="nav">
                                     <li>
                                         <a class="active show" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                     </li>
                                     <li>
                                         <a data-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                     </li>
                                 </ul>
                             </div> -->
                             <!--Toolbar Short Area Start-->
                             <!-- <div class="toolbar-short-area d-md-flex align-items-center">
                                 <div class="toolbar-shorter ">
                                     <label>Sort By:</label>
                                     <select class="wide">
                                         <option data-display="Select">Nothing</option>
                                         <option value="Relevance">Relevance</option>
                                         <option value="Name, A to Z">Name, A to Z</option>
                                         <option value="Name, Z to A">Name, Z to A</option>
                                         <option value="Price, low to high">Price, low to high</option>
                                         <option value="Price, high to low">Price, high to low</option>
                                     </select>
                                 </div>
                                 <div class="toolbar-shorter ">
                                     <label>Show</label>
                                     <select class="small">
                                         <option data-display="Select">9</option>
                                         <option value="15">15</option>
                                         <option value="30">30</option>
                                     </select>
                                     <span>per page</span>
                                 </div>

                             </div> -->
                             <!--Toolbar Short Area End-->
                         </div>
                         <!-- Grid & List View End -->
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="shop-product">
                             <div id="myTabContent-2" class="tab-content">
                                 <div id="grid" class="tab-pane fade active show">
                                     <div class="product-grid-view">
                                         <div class="row">
                                             <?php foreach ($product_list as $item) { ?>
                                                 <div class="col-lg-3">
                                                     <!-- Single Product Start -->
                                                     <div class="single-product mb-30">
                                                         <div class="product-img">
                                                             <a href="<?= base_url('product/detail?id_sp=').$item->MaSP ?>">
                                                                 <img src="<?= base_url('uploads/SanPham/'). $item->Anh ?>" alt="" width="270" height="350">
                                                             </a>
                                                             <!-- <span class="descount-sticker">-10%</span> -->
                                                             <!-- <span class="sticker">New</span> -->
                                                             <input id="<?= $item->MaSP ?>" value="1" type="hidden" />
                                                             <div class="product-action d-flex justify-content-between">
                                                                 <a class="product-btn add_cart" href="#" data-masp="<?= $item->MaSP ?>" data-tensp="<?= $item->TenSP ?>"
                                                                    data-dongia="<?= $item->DonGia ?>" data-qty="1"
                                                                 >
                                                                     Thêm vào giỏ
                                                                 </a>
                                                                 <ul class="d-flex">
                                                                     <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                     <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                     <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                 </ul>
                                                             </div>
                                                         </div>
                                                         <div class="product-content">
                                                             <h3><a href="<?= base_url('product/detail') ?>"><?= $item->TenSP ?></a></h3>
                                                             <div class="ratting">
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                             </div>
                                                             <h4 class="price"><span class="new"><?= number_format($item->DonGia) ?> VND</span></h4>
                                                         </div>
                                                     </div>
                                                     <!-- Single Product End -->
                                                 </div>
                                             <?php } ?>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row mb-30 mb-sm-0 mb-xs-0">
                     <!-- <div class="col">
                         <ul class="page-pagination">
                             <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                             <li class="active"><a href="#">01</a></li>
                             <li><a href="#">02</a></li>
                             <li><a href="#">03</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                         </ul>
                     </div> -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Shop Section End -->

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