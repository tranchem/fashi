 <!--Header section start-->
 <header class="header header-transparent header-sticky">
     <div class="header-top">
         <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
             <div class="row align-items-center">

                 <div class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                     <!--Links start-->
                     <div class="header-top-links">
                         <ul>
                             <li><a href="#"><i class="fa fa-phone"></i>0963 273 254</a></li>
                             <li><a href="#"><i class="fa fa-envelope-open-o"></i>thefacestore@gmail.com</a></li>
                         </ul>
                     </div>
                     <!--Links end-->
                     <!--Socail start-->
                     <div class="header-top-social">
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-google-plus"></i></a>
                         <a href="#"><i class="fa fa-pinterest-p"></i></a>
                         <a href="#"><i class="fa fa-instagram"></i></a>
                         <a href="#"><i class="fa fa-vimeo"></i></a>
                     </div>
                     <!--Socail end-->
                 </div>
                 <div class="col-xl-6 col-lg-4">
                     <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                         <ul class="ht-us-menu d-flex">
                             <li><a href="#"><i class="fa fa-user-circle-o"></i>Đăng nhập</a>
                                 <ul class="ht-dropdown right">
                                     <!-- <li><a href="compare.html">Compare Products</a></li> -->
                                     <li><a href="<?= base_url('account') ?>">Tài khoản của tôi</a></li>
                                     <!-- <li><a href="wishlist.html">My Wish List</a></li> -->
                                     <li><a href="<?= base_url('login') ?>">Đăng nhập</a></li>
                                 </ul>
                             </li>
                         </ul>
                         <!-- <ul class="ht-cr-menu d-flex">
                                    <li><a href="#">EUR</a>
                                        <ul class="ht-dropdown width-20">
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img src="assets/images/language/english.png" alt="">English2</a>
                                        <ul class="ht-dropdown width-50">
                                            <li><a href="#"><img src="assets/images/language/english.png"
                                                        alt="">English1</a></li>
                                            <li><a href="#"><img src="assets/images/language/english.png"
                                                        alt="">English3</a></li>
                                            <li><a href="#"><img src="assets/images/language/english.png"
                                                        alt="">English4</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <div class="header-bottom menu-right">
         <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
             <div class="row align-items-center">

                 <!--Logo start-->
                 <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                     <div class="logo">
                         <a href="<?= base_url() ?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt=""></a>
                     </div>
                 </div>
                 <!--Logo end-->

                 <!--Menu start-->
                 <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                     <nav class="main-menu">
                         <ul>
                             <!-- <li><a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                            <li><a href="index-4.html">Home Four</a></li>
                                            <li><a href="index-5.html">Home Five</a></li>
                                            <li><a href="index-6.html">Home Six</a></li>
                                        </ul>
                                    </li> -->
                             <li><a href="">Danh mục sản phẩm</a>
                                 <ul class="sub-menu">
                                     <?php foreach ($ten_dm as $key => $value) : ?>
                                         <li><a href="<?= base_url('product/?id_dm=' . $value['id_dm']) ?>"><?php echo $value['ten_dm'] ?></a></li>
                                     <?php endforeach ?>
                                 </ul>
                             </li>
                             <li><a href="blog.html">Blog làm đẹp</a>
                                 <ul class="sub-menu">
                                     <li><a href="<?= base_url('blog') ?>">Bí Quyết Chống Nắng Bảo Vệ Da</a></li>
                                     <li><a href="<?= base_url('blog') ?>">Bí Quyết Giúp Thanh Xuân Trở Lại</a></li>
                                     <li><a href="<?= base_url('blog') ?>">Cách Chăm Sóc Da</a></li>
                                     <li><a href="<?= base_url('blog') ?>">Tips Làm Đẹp Tự Nhiên</a></li>
                                     <li><a href="<?= base_url('blog') ?>">Xu Hướng Trang Điểm</a></li>
                                     <!-- <li><a href="blog-details-gallery.html">Blog Details Gallery</a></li> -->
                                     <!-- <li><a href="blog-details-audio.html">Blog Details Audio</a></li> -->
                                     <!-- <li><a href="blog-details-video.html">Blog Details Video</a></li> -->
                                 </ul>
                             </li>
                             <li><a href="<?= base_url('about') ?>">Về chúng tôi</a></li>
                             <li><a href="<?= base_url('contact') ?>">Liên hệ</a></li>
                         </ul>
                     </nav>
                 </div>
                 <!--Menu end-->

                 <!--Search Cart Start-->
                 <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                     <div class="header-search">
                         <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                         <div class="header-search-form">
                             <form action="#">
                                 <input type="text" placeholder="Type and hit enter">
                                 <button><i class="fa fa-search"></i></button>
                             </form>
                         </div>
                     </div>
                     <div class="header-cart">
                         <a href="cart.html"><i class="fa fa-shopping-cart"></i>
                             <!-- <span id="count_item">3</span> -->
                         </a>
                         <!--Mini Cart Dropdown Start-->
                         <div class="header-cart-dropdown">
                             <!-- <ul class="cart-items">
                                        <li class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <h5 class="product-name"><a href="single-product.html">Dell Inspiron
                                                24</a></h5>
                                                <span class="product-quantity">1 ×</span>
                                                <span class="product-price">$278.00</span>
                                            </div>
                                            <div class="cart-item-remove">
                                                <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <h5 class="product-name"><a href="single-product.html">Lenovo Ideacentre
                                                300</a></h5>
                                                <span class="product-quantity">1 ×</span>
                                                <span class="product-price">$23.39</span>
                                            </div>
                                            <div class="cart-item-remove">
                                                <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="cart-total">
                                        <h5>Subtotal :<span class="float-right">$39.79</span></h5>
                                        <h5>Eco Tax (-2.00) :<span class="float-right">$7.00</span></h5>
                                        <h5>VAT (20%) : <span class="float-right">$0.00</span></h5>
                                        <h5>Total : <span class="float-right">$46.79</span></h5>
                                    </div> -->
                             <div id="cart_details">
                                 <h3>Cart is Empty</h3>
                             </div>
                             <div class="cart-btn">
                                 <a href="<?= base_url('checkout') ?>">Thanh toán</a>
                             </div>
                         </div>
                         <!--Mini Cart Dropdown End-->
                     </div>
                 </div>
                 <!--Search Cart End-->
             </div>

             <!--Mobile Menu start-->
             <div class="row">
                 <div class="col-12 d-flex d-lg-none">
                     <div class="mobile-menu"></div>
                 </div>
             </div>
             <!--Mobile Menu end-->

         </div>
     </div>
 </header>
 <!--Header section end-->

 <!-- Messenger Plugin chat Code -->
 <div id="fb-root"></div>
 <script>
     window.fbAsyncInit = function() {
         FB.init({
             xfbml: true,
             version: 'v10.0'
         });
     };

     (function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s);
         js.id = id;
         js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
         fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
 </script>

 <!-- Your Plugin chat code -->
 <div class="fb-customerchat" attribution="page_inbox" page_id="104117255139199">
 </div>