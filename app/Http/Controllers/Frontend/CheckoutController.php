<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function CheckoutStore(Request $request)
    {
        // dd($request->all());
        $data = array();
        $data['shipping_name'] = $request->input('name');
        $data['shipping_email'] = $request->input('email');
        $data['shipping_phone'] = $request->input('phone');
        $data['shipping_city'] = $request->input('city');
        $data['shipping_address'] = $request->input('address');

        if ($request->payment_method == 'stripe') {
            return view('frontend.payment.stripe', compact('data'));
        } else {
            return view('frontend.payment.cash', compact('data'));
        }

    } // end mehtod
}
