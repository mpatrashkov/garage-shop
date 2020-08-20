<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $promotions = Product::where("discount", ">", "0")->get();
        $recent = Product::latest()->get();

        return view("homepage", ["recent" => $recent, "promotions" => $promotions]);
    }
}
