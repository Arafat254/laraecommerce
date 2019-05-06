<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="sfF1K1Qy7YnYyW2YLEGHM7CxrTHR4LfKLdXMogdl">

    <title>Laravel Ecommerce | Products</title>

    <link href="img/favicon.html" rel="SHORTCUT ICON" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">


</head>


<body class="">
    <header>
        <div class="top-nav container">
            <div class="top-nav-left">
                <div class="logo"><a href="{{ route('landing-page') }}">Ecommerce</a></div>
                <ul>
                    <li>
                        <a href="{{ route('shop.index') }}">
                Shop
                            </a>
                    </li>
                    <li>
                        <a href="#">
                About
                            </a>
                    </li>
                    <li>
                        <a href="https://blog.laravelecommerceexample.ca/">
                Blog
                            </a>
                    </li>
                </ul>

            </div>
            <div class="top-nav-right">
                <ul>
                    <li><a href="register.html">Sign Up</a></li>
                    <li><a href="login.html">Login</a></li>
                 <li><a href="{{ route('cart.index') }}">Cart
                     @if (Cart::instance('default')->count() > 0)
                         <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                     @endif


                    </a></li>

                </ul>
            </div>
        </div>
        <!-- end top-nav -->
    </header>


    <div class="breadcrumbs">
        <div class="breadcrumbs-container container">
            <div>
                <a href="index.html">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span>Shop</span>
            </div>
            <div>

            </div>
        </div>
    </div>
    <!-- end breadcrumbs -->

    <div class="container">

    </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li class=""><a href="shop8387.html?category=laptops">Laptops</a></li>
                <li class=""><a href="shop015b.html?category=desktops">Desktops</a></li>
                <li class=""><a href="shop2d05.html?category=mobile-phones">Mobile Phones</a></li>
                <li class=""><a href="shopdd66.html?category=tablets">Tablets</a></li>
                <li class=""><a href="shope10b.html?category=tvs">TVs</a></li>
                <li class=""><a href="shop8d34.html?category=digital-cameras">Digital Cameras</a></li>
                <li class=""><a href="shop9a8c.html?category=appliances">Appliances</a></li>
            </ul>
        </div>
        <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">Featured</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="shop6330.html?sort=low_high">Low to High</a> |
                    <a href="shop94e1.html?sort=high_low">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                        <a href="{{ route('shop.show',$product->slug) }}">
                            <div class="product-name">{{ $product->name }}</div>
                        </a>
                        <div class="product-price">${{ $product->price }}</div>
                    </div>
                @endforeach

            </div>
            <!-- end products -->

            <div class="spacer"></div>
            <ul class="pagination" role="navigation">

                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>





                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="shop4658.html?page=2">2</a></li>


                <li class="page-item">
                    <a class="page-link" href="shop4658.html?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
            </ul>

        </div>
    </div>


    <footer>
        <div class="footer-content container">
            <div class="made-with">Made with <i class="fa fa-heart heart"></i> by Andre Madarang</div>
            <ul>
                <li>Follow Me:</li>
                <li><a href="#"><i class="fa Follow Me:"></i></a></li>
                <li><a href="http://andremadarang.com/"><i class="fa fa-globe"></i></a></li>
                <li><a href="http://youtube.com/drehimself"><i class="fa fa-youtube"></i></a></li>
                <li><a href="http://github.com/drehimself"><i class="fa fa-github"></i></a></li>
                <li><a href="http://twitter.com/drehimself"><i class="fa fa-twitter"></i></a></li>
            </ul>

        </div>
        <!-- end footer-content -->
    </footer>


</body>


</html>
