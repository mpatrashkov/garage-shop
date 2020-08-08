<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $category = "")
    {
        $price = DB::table("products")->select(DB::raw("min(price) as minPrice, max(price) as maxPrice"))->first();

        $minPrice = $request->input("minPrice", $price->minPrice);
        $maxPrice = $request->input("maxPrice", $price->maxPrice);
        $search = $request->input("q", "");

        // dd($search);

        $products = [];

        if ($category) {
            $products = Product::whereHas("category", function (Builder $query) use ($category, $minPrice, $maxPrice, $search) {
                $query->where([
                    ["name", "=", $category],
                ]);
            })->with("category")->where([
                ["price", ">=", $minPrice],
                ["price", "<=", $maxPrice],
                ["name", "like", "%$search%"]
            ])->paginate(20);
        } else {
            $products = Product::where([
                ["price", ">=", $minPrice],
                ["price", "<=", $maxPrice]
            ])->paginate(20);
        }

        $recent = Product::all();

        return view("products", [
            "products" => $products,
            "categories" => Category::all(),
            "currentCategory" => $category,
            "price" => [
                "min" => $price->minPrice,
                "max" => $price->maxPrice,
                "minValue" => $minPrice,
                "maxValue" => $maxPrice
            ],
            "search" => $search,
            "recent" => $recent
        ]);
    }
}
