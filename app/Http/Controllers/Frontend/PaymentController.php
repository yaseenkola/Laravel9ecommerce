<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function thank_you()
    {
        return view('frontend.thank_you');
    }
}
