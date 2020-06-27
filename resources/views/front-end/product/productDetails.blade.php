<!DOCTYPE HTML>
<html>
<head>
    <title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
    <!--css-->
    <link href="{{ asset ('/') }}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset ('/') }}/front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset ('/') }}/front-end/css/font-awesome.css" rel="stylesheet">
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{ asset ('/') }}/front-end/js/jquery.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--search jQuery-->
    <script src="{{ asset ('/') }}/front-end/js/main.js"></script>
    <!--search jQuery-->
    <script type="text/javascript" src="{{ asset ('/') }}/front-end/js/bootstrap-3.1.1.min.js"></script>
    <!-- cart -->
    <script src="{{ asset ('/') }}/front-end/js/simpleCart.min.js"></script>
    <!-- cart -->
    <script defer src="{{ asset ('/') }}/front-end/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="{{ asset ('/') }}/front-end/css/flexslider.css" type="text/css" media="screen" />
    <script src="{{ asset ('/') }}/front-end/js/imagezoom.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>

    <!--mycart-->
    <!--start-rate-->
    <script src="{{ asset ('/') }}/front-end/js/jstarbox.js"></script>
    <link rel="stylesheet" href="{{ asset ('/') }}/front-end/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!--//End-rate-->
    <link href="{{ asset ('/') }}/front-end/css/owl.carousel.css" rel="stylesheet">
    <script src="{{ asset ('/') }}/front-end/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
            });
        });
    </script>

</head>
<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-left">
                <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
            </div>
            <div class="top-right">
                <ul>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="registered.html"> Create Account </a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="heder-bottom">
        <div class="container">
            <div class="logo-nav">
                <div class="logo-nav-left">
                    <h1><a href="index.html">New Shop <span>Shop anywhere</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html" class="act">Home</a></li>
                                <!-- Mega Menu -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="products.html">Clothing</a></li>
                                                    <li><a href="products.html">Wallets</a></li>
                                                    <li><a href="products.html">Shoes</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html"> Underwear </a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="products.html">Sunglasses</a></li>
                                                    <li><a href="products.html">Wallets,Bags</a></li>
                                                    <li><a href="products.html">Footwear</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                    <li><a href="products.html">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="{{ asset ('/') }}/front-end/images/woo.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="{{ asset ('/') }}/front-end/images/woo1.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="products1.html">Clothing</a></li>
                                                    <li><a href="products1.html">Wallets</a></li>
                                                    <li><a href="products1.html">Shoes</a></li>
                                                    <li><a href="products1.html">Watches</a></li>
                                                    <li><a href="products1.html"> Underwear </a></li>
                                                    <li><a href="products1.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu 2</h6>
                                                    <li><a href="products1.html">Sunglasses</a></li>
                                                    <li><a href="products1.html">Wallets,Bags</a></li>
                                                    <li><a href="products1.html">Footwear</a></li>
                                                    <li><a href="products1.html">Watches</a></li>
                                                    <li><a href="products1.html">Accessories</a></li>
                                                    <li><a href="products1.html">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="{{ asset ('/') }}/front-end/images/woo4.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="{{ asset ('/') }}/front-end/images/woo3.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="codes.html">Short Codes</a></li>
                                <li><a href="mail.html">Mail Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <div class="total">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                <img src="{{ asset ('/') }}/front-end/images/bag.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--header-->
<!--banner-->
<div class="banner1">
    <div class="container">
        <h3><a href="index.html">Home</a> / <span>Single</span></h3>
    </div>
</div>
<!--banner-->

<!--content-->
<div class="content">
    <!--single-->
    <div class="single-wl3">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-9 single-grid">
                    <div clas="single-top">
                        <div class="single-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{ asset ($ProductDetails->product_image) }}">
                                        <div class="thumb-image"> <img src="{{ asset ($ProductDetails->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                    <li data-thumb="{{ asset ($ProductDetails->product_image) }}">
                                        <div class="thumb-image"> "{{ asset ($ProductDetails->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                    <li data-thumb="{{ asset ($ProductDetails->product_image) }}">
                                        <div class="thumb-image"> "{{ asset ($ProductDetails->product_image) }}"data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="single-right simpleCart_shelfItem">
                            <h4>{{$ProductDetails->product_name}}</h4>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="price item_price">{{$ProductDetails->product_price}}</p>
                            <div class="description">
                                <p><span>Product descreption : </span>{{$ProductDetails -> product_short_description}}</p>
                            </div>
                            {{Form :: open (['route'=>'add-to-cart','method'=>'GET'])}}
                            <div class="color-quality">
                                <h6>Quality :</h6>
                                <div class="quantity">
                                   <input type = "number" name = "qty" value = "1" min = "1"/>
                                    <input type = "text" name = "id" value = "{{$ProductDetails-> product_id}}" />

                                </div>
                            </div>
                            <div class="women">
                                <span class="size">{{$ProductDetails->product_size}} </span>
                                <input type = "submit" name = "btn" value ="Add To Cart" class="my-cart-b item_add"/>
                            </div>
                            {{Form :: close()}}
                            <div class="social-icon">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                                <a href="#"><i class="icon3"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 single-grid1">
                    <h3>Recent Products</h3>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.html"><img class="img-responsive " src="{{ asset ('/') }}/front-end/images/r.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1"> $ 29.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.html"><img class="img-responsive " src="{{ asset ('/') }}/front-end/images/r1.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1"> $ 19.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.html"><img class="img-responsive " src="{{ asset ('/') }}/front-end/images/r2.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1"> $ 19.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.html"><img class="img-responsive " src="{{ asset ('/') }}/front-end/images/r3.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1">$ 45.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

    <!--single-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Best Sellers</h3>
            <div class="arrivals-grids">
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/p28.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/p27.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/p30.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/p29.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben2">
                            <p>OUT OF STOCK</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/s2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/s1.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/s4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img  src="{{ asset ('/') }}/front-end/images/s3.jpg" class="img-responsive"  alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
</div>
<!--content-->
<!---footer--->
<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <div class="social-icon">
                    <a href="#"><i class="icon"></i></a>
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <a href="#"><i class="icon3"></i></a>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>My Account</h4>
                <ul>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="registered.html"> Create Account </a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="mail.html">Mail Us</a></li>
                    <li><a href="products1.html">products1</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; 2016 New Shop . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <div class="copy-right">
            <img src="{{ asset ('/') }}/front-end/images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->

</body>
</html>
