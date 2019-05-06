<header class="with-background">
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
    <div class="hero container">
        <div class="hero-copy">
            <h1>Laravel Ecommerce Demo</h1>
            <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration.</p>
            <div class="hero-buttons">
                <a href="https://www.youtube.com/playlist?list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR" class="button button-white">Screencasts</a>
                <a href="https://github.com/drehimself/laravel-ecommerce-example" class="button button-white">GitHub</a>
            </div>
        </div>
        <!-- end hero-copy -->

        <div class="hero-image">
            <img src="{{ asset('assets/frontend/img/macbook-pro-laravel.png') }}" alt="hero image">
        </div>
        <!-- end hero-image -->
    </div>
    <!-- end hero -->
</header>
