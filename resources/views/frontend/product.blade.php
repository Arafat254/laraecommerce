<!doctype html>
<html lang="en">

<!-- Mirrored from laravelecommerceexample.ca/shop/desktop-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:22:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="sfF1K1Qy7YnYyW2YLEGHM7CxrTHR4LfKLdXMogdl">

    <title>Laravel Ecommerce | Desktop 1</title>

    <link href="../img/favicon.html" rel="SHORTCUT ICON" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">


    <link rel="stylesheet" href="../css/algolia.css">
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
                    <li><a href="../register.html">Sign Up</a></li>
                    <li><a href="../login.html">Login</a></li>
                    <li><a href="{{ route('cart.index') }}">Cart <span class="cart-count"><span>{{ Cart::count() }}</span></span></a></li>

                </ul>
            </div>
        </div>
        <!-- end top-nav -->
    </header>


    <div class="breadcrumbs">
        <div class="breadcrumbs-container container">
            <div>
                <a href="../index.html">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span><a href="../shop.html">Shop</a></span>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span>Desktop 1</span>
            </div>
            <div>

        </div>
    </div>
    <!-- end breadcrumbs -->

    <div class="container">

    </div>

    <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src="{{ asset('img/products/'.$products->slug.'.jpg') }}" alt="product" class="active" id="currentImage">
            </div>
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $products->name }}</h1>
            <div class="product-section-subtitle">{{ $products->details }}</div>
            <div>
                <div class="badge badge-success">In Stock</div>
            </div>
            <div class="product-section-price">${{ $products->price }}</div>

            <p>
               {{ $products->description }}
            </p>

            <p>&nbsp;</p>

            <form action="{{ route('cart.store') }}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $products->id }}">
                <input type="hidden" name="name" value="{{ $products->name }}">
                <input type="hidden" name="price" value="{{ $products->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
            </form>
        </div>
    </div>
    <!-- end product-section -->

    <div class="might-like-section">
        <div class="container">
            <h2>You might also like...</h2>
            <div class="might-like-grid">

                @foreach($mightAlsoLike as $product)
                <a href="{{ route('shop.show',$product->slug) }}" class="might-like-product">
                    <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-price">${{ $product->price }}</div>
                </a>
                @endforeach
            </div>
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

    <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="../../cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="../../cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="../js/algolia.js"></script>


</body>


</html>
