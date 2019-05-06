<!doctype html>
<html lang="en">

<!-- Mirrored from laravelecommerceexample.ca/cart by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:22:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="sfF1K1Qy7YnYyW2YLEGHM7CxrTHR4LfKLdXMogdl">

    <title>Laravel Ecommerce | Shopping Cart</title>

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
               <li><a href="{{ route('cart.index') }}">Cart <span class="cart-count"><span>{{ Cart::count() }}</span></span></a></li>

            </ul>
        </div>
    </div>
    <!-- end top-nav -->
</header>


    <div class="breadcrumbs">
        <div class="breadcrumbs-container container">
            <div>
                <a href="#">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span>Shopping Cart</span>
            </div>

        </div>
    </div>
    <!-- end breadcrumbs -->

    <div class="cart-section container">
        <div>

            @if(session()->has('success_message'))
                <div class="alert alert-success">

                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(Cart::count() > 0)

            <h3>{{ Cart::count() }} items in Cart!</h3>


                <div class="cart-table">
                    @foreach(Cart::content() as $item)
                    <div class="cart-table-row">

                        <div class="cart-table-row-left">
                            <a href="{{ route('shop.show',$item->model->slug) }}"><img src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}" alt="item" class="cart-table-img"></a>
                            <div class="cart-item-details">
                                <div class="cart-table-item"><a href="">{{ $item->model->name }}</a></div>
                                <div class="cart-table-description">{{ $item->model->details }}</div>
                            </div>
                        </div>
                        <div class="cart-table-row-right">
                            <div class="cart-table-actions">
                                <form action="{{ route('cart.destroy',$item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="cart-options">Remove</button>
                                </form>

                              <form action="{{ route('cart.switchToSaveForLater',$item->rowId) }}" method="POST">
                                    @csrf

                                    <button type="submit" class="cart-options">Save for later</button>
                                </form>
                            </div>
                            <div>
                                <select class="quantity" data-id="" data-productQuantity="10">
                                    <option selected>1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                                                                                                             </select>
                            </div>
                            <div>${{ $item->model->price }}</div>
                        </div>
                    </div>
                    <!-- end cart-table-row -->
                @endforeach

                </div>
                <!-- end cart-table -->


                <a href="#" class="have-code">Have a Code?</a>

                <div class="have-code-container">
                    <form action="https://laravelecommerceexample.ca/coupon" method="POST">
                        <input type="hidden" name="_token" value="1C1Mh1uUnjsm5xyDwyu9EOZzvWecc9jf75mzZbHI">
                        <input type="text" name="coupon_code" id="coupon_code">
                        <button type="submit" class="button button-plain">Apply</button>
                    </form>
                </div>
                <!-- end have-code-container -->

                <div class="cart-totals">
                    <div class="cart-totals-left">
                        Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                    </div>

                    <div class="cart-totals-right">
                        <div>
                            Subtotal <br> Tax (13%)<br>
                            <span class="cart-totals-total">Total</span>
                        </div>
                        <div class="cart-totals-subtotal">
                            {{ Cart::subtotal() }} <br> {{ Cart::tax() }} <br>
                            <span class="cart-totals-total">{{ Cart::total() }}</span>
                        </div>
                    </div>
                </div>
                <!-- end cart-totals -->

                @else
                    <span class="badge badge-red">No Item In card</span>

                @endif

                <div class="cart-buttons">
                    <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                    <a href="{{ route('checkout.index') }}" class="button-primary">Proceed to Checkout</a>
                </div>

        @if(Cart::instance('saveForLater')->count() > 0)

            <h3>{{ Cart::instance('saveForLater')->count() }} items save for later!</h3>

                <div class="saved-for-later cart-table">
                    @foreach(Cart::instance('saveForLater')->content() as $item)
                        <div class="cart-table-row">

                            <div class="cart-table-row-left">
                                <a href="{{ route('shop.show',$item->model->slug) }}"><img src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}" alt="item" class="cart-table-img"></a>
                                <div class="cart-item-details">
                                    <div class="cart-table-item"><a href="">{{ $item->model->name }}</a></div>
                                    <div class="cart-table-description">{{ $item->model->details }}</div>
                                </div>
                            </div>
                            <div class="cart-table-row-right">
                                <div class="cart-table-actions">
                                    <form action="{{ route('saveForLater.destroy',$item->rowId) }}" method="POST">
                                        @csrf @method('DELETE')

                                        <button type="submit" class="cart-options">Remove</button>
                                    </form>

                                    <form action="{{ route('saveForLater.switchToCart',$item->rowId) }}" method="POST">
                                        @csrf

                                        <button type="submit" class="cart-options">Move to Cart</button>
                                    </form>
                                </div>
                                <div>
                                    <select class="quantity" data-id="" data-productQuantity="10">
                                        <option selected>1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                                                                                                                    </select>
                                </div>
                                <div>${{ $item->model->price }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- end saved-for-later -->

            @else
                <h3>No Item In save for later</h3>

            @endif



        </div>

    </div>
    <!-- end cart-section -->

    <div class="might-like-section">
        <div class="container">
            <h2>You might also like...</h2>
            <div class="might-like-grid">


              @foreach($mightAlsoLike as $product)
            <a href="{{ route('shop.show',$product->slug) }}" class="might-like-product">
                                <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product">
                                <div class="might-like-product-name">{{ $product->name }}</div>
                                <div class="might-like-product-price">${{ $product->price }}</div>
                            </a> @endforeach


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

    <script src="js/app.js"></script>



</body>

<!-- Mirrored from laravelecommerceexample.ca/cart by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:22:32 GMT -->

</html>
