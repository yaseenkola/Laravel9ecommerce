<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    public function index()
    {
        $products = DB::table('products')->limit(4)->get();
        return view('frontend.index', ['products' => $products]);
    }

    public function single_product(Request $request, $id)
    {
        $product_array = DB::table('products')->where('id', $id)->get();
        return view('frontend.product.single_product', ['product_array' => $product_array]);
    }

    public function products()
    {
        $products = DB::table('products')->paginate(4);
        return view('frontend.product.products', ['products' => $products]);
    }
}
