<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function AddProduct()
    {
        return view('backend.product.product_add');

    }

    public function StoreProduct(Request $request)
    {

        $product_image = $request->file('product_image');

        $name_gen = hexdec(uniqid()) . '.' . $product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(300, 350)->save('img/products/' . $name_gen);

        $last_img = 'img/products/' . $name_gen;

        Product::insert([
            'name' => $request->product_name,
            'description' => $request->product_description,
            'quantity' => $request->product_quantity,
            'price' => $request->product_price,
            'sale_price' => $request->product_sale_price,
            'category' => $request->product_category,
            'type' => $request->product_type,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);

    }
}
