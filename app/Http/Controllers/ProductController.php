<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($id, $slug = '')
    {
        $product = Product::findOrFail($id);

        // dd($product->slug);

        // if ($slug !== $product->slug) {
        //     return redirect()->to($product->url());
        // }

        $recent = Product::all();

        return view('product.detail', ["product" => $product, "recent" => $recent]);
    }
}
