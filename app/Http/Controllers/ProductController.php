<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function detail($id, $slug = '') {
        $product = Product::findOrFail($id);

        if ($slug !== $product->slug) {
            return redirect()->to($product->url());
        }

        return view('product.detail', ["product" => $product]);
    }
}
