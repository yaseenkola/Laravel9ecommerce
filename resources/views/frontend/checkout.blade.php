@extends('frontend.main_master')

@section('content')
    <!-- Checkout -->
    <section class="my-2 py-5 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Check Out</h2>
            <hr class="mx-auto">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form id="checkout-form" method="POST" action="{{ route('checkout_store') }}">
                        @csrf
                        <div class="form-group checkout-small-element">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name"
                                required>
                        </div>

                        <div class="form-group checkout-small-element">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="checkout-email" name="email"
                                placeholder="email address" required>
                        </div>

                        <div class="form-group checkout-small-element">
                            <label for="">Phone</label>
                            <input type="tel" class="form-control" id="checkout-phone" name="phone"
                                placeholder="phone number" required>
                        </div>

                        <div class="form-group checkout-small-element">
                            <label for="">City</label>
                            <input type="text" class="form-control" id="checkout-city" name="city" placeholder="city"
                                required>
                        </div>

                        <div class="form-group checkout-large-element">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="checkout-address" name="address"
                                placeholder="address" required>
                        </div>

                        @if (Session::has('total'))
                            @if (Session::get('total') != null)
                                <div class="form-group checkout-btn-container">
                                    <p style="font-size: bold;font-weight: bold;">Total amount:
                                        ${{ Session::get('total') }}</p>
                                </div>
                            @endif
                        @endif


                </div>

                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                    <h5>Select Payment Method</h5>
                    <div class="row">

                        <div class="col-md-6">
                            <label for="">Stripe</label>
                            <input type="radio" name="payment_method" value="stripe">
                            <img src="{{ asset('/img/stripe_logo.png') }}">
                        </div> <!-- end col md 6 -->

                        <div class="col-md-6">
                            <label for="">Cash</label>
                            <input type="radio" name="payment_method" value="cash">
                            <img src="{{ asset('/img/cash-on-delivery.png') }}">
                        </div> <!-- end col md 6 -->
                    </div>

                    <hr>

                    <button type="submit" class="btn btn-primary">Payment Step</button>

                    <!-- checkout-progress-sidebar -->
                </div><!-- end col md 4 -->
                </form>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
