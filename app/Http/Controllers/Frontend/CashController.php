<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CashController extends Controller
{
    public function CashOrder(Request $request)
    {
        if ($request->session()->has('cart')) {

            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $city = $request->input('city');
            $address = $request->input('address');

            $amount = $request->session()->get('total');
            $payment_method = "Cash On Delivery";

            $cart = $request->session()->get('cart');

            $order_id = DB::table('orders')->InsertGetId([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'city' => $city,
                'address' => $address,
                'amount' => $amount,
                'payment_method' => $payment_method,
                'order_date' => Carbon::now()->format('d F Y'),
                'status' => 'Pending',
                'created_at' => Carbon::now(),

            ], 'id');

            foreach ($cart as $id => $product) {
                $product = $cart[$id];
                $product_id = $product['id'];
                $product_name = $product['name'];
                $product_price = $product['price'];
                $product_quantity = $product['quantity'];
                $product_image = $product['image'];

                DB::table('order_items')->insert([
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_quantity' => $product_quantity,
                    'product_image' => $product_image,
                ]);

            }

            //remove everything from session
            $request->session()->flush();

            $notification = array(
                'message' => 'Your Order Placed Successfully',
                'alert-type' => 'success',
            );

            return redirect('/thank_you')->with($notification);

        }
    }
}
