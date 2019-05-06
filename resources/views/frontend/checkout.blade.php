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

<style type="text/css">
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>
<body>

        <script src="https://js.stripe.com/v3/"></script>






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


<div class="container">
    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif @if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1 class="checkout-heading stylish-heading">Checkout</h1>
    <div class="checkout-section">
        <div>
            <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                @csrf
                <h2>Billing Details</h2>

                <div class="form-group">
                    <label for="email">Email Address</label> @if (auth()->user())
                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>                @else
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"> @endif
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                </div>

                <div class="half-form">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                    </div>
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}">
                    </div>
                </div>
                <!-- end half-form -->

                <div class="half-form">
                    <div class="form-group">
                        <label for="postalcode">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                <!-- end half-form -->

                <div class="spacer"></div>

                <h2>Payment Details</h2>

                <div class="form-group">
                    <label for="name_on_card">Name on Card</label>
                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                </div>

                <label for="card-element">
                                                      Credit or debit card
                                                    </label>
                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
                <div class="spacer"></div>

                <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


            </form>


        </div>



        <div class="checkout-table-container">
            <h2>Your Order</h2>

            <div class="checkout-table">
                @foreach (Cart::content() as $item)
                <div class="checkout-table-row">
                    <div class="checkout-table-row-left">
                        <img src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}" alt="item" class="checkout-table-img">
                        <div class="checkout-item-details">
                            <div class="checkout-table-item">{{ $item->model->name }}</div>
                            <div class="checkout-table-description">{{ $item->model->details }}</div>
                            <div class="checkout-table-price">{{ $item->model->Price }}</div>
                        </div>
                    </div>
                    <!-- end checkout-table -->

                    <div class="checkout-table-row-right">
                        <div class="checkout-table-quantity">{{ $item->qty }}</div>
                    </div>
                </div>
                <!-- end checkout-table-row -->
                @endforeach

            </div>
            <!-- end checkout-table -->

            <div class="checkout-totals">

                    <div class="checkout-totals-left">
                        Subtotal <br> Tax (13%)<br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        ${{ Cart::subtotal() }} <br> ${{ Cart::tax() }} <br>
                        <span class="checkout-totals-total">${{ Cart::total() }}</span>

                    </div>

                <!-- end checkout-totals -->


                </div>
            </div>
            <!-- end checkout-totals -->
        </div>

    </div>
    <!-- end checkout-section -->
    </div>

    <script type="text/javascript">
        // Create a Stripe client.
    var stripe = Stripe('pk_test_QEc5rYKWaexfqITBC2f4KcTJ');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {
        style: style

    });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

       var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }

      stripe.createToken(card, options).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
        form.submit();
    }

    </script>

        <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="../../cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
        <script src="../../cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="../js/algolia.js"></script>




</body>


</html>
