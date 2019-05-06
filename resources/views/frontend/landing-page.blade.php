@extends('frontend.layouts.app')

@section('content')
    <div class="featured-section">

        <div class="container">
            <h1 class="text-center">Laravel Ecommerce</h1>

            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur
                quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic lorem.</p>

            <div class="text-center button-container">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
            </div>



            <div class="products text-center">

                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                        <a href="shop/appliance-5.html">
                            <div class="{{ route('shop.show',$product->slug) }}">{{ $product->name }}</div>
                        </a>
                        <div class="product-price">${{ $product->price }}</div>
                    </div>
                @endforeach



            </div>
            <!-- end products -->

            <div class="text-center button-container">
                <a href="{{ route('shop.index') }}" class="button">View more products</a>
            </div>

        </div>
        <!-- end container -->

    </div>
    <!-- end featured-section -->

    <blog-posts></blog-posts>
@endsection
