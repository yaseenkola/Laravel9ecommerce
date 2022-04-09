@extends('frontend.main_master')

@section('content')
    <section class="container mt-5 my-3 py-5">
        <div class="container mt-2 text-center">
            <h4>Cash Payment</h4>
            <br>
            <div class="col-md-6" style="margin: auto;">
                <form action="{{ route('cash_order') }}" method="post" id="payment-form">
                    @csrf
                    <img src="{{ asset('/img/cash.png') }}" class="mb-3">>

                    @if (Session::has('total'))
                        @if (Session::get('total') != null)
                            <div class="form-group checkout-btn-container">
                                <p style="font-size: bold;font-weight: bold;">Total amount:
                                    ₹{{ Session::get('total') }}</p>
                            </div>
                        @endif
                    @endif

                    <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                    <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                    <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                    <input type="hidden" name="city" value="{{ $data['shipping_city'] }}">
                    <input type="hidden" name="address" value="{{ $data['shipping_address'] }}">

                    <button class="btn btn-primary">Submit Payment</button>
                </form>
            </div><!--  // end col md 6 -->
        </div>
    </section>
@endsection
