<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function all(Request $request, $category = "")
    {
        $allProducts = Product::all();
        if ($allProducts->count() <= 0) {
            return view("no-products");
        }

        $price = DB::table("products")->select(DB::raw("min(price) as minPrice, max(price) as maxPrice"))->first();

        if ($price) {
            $extractedMinPrice = $price->minPrice;
            $extractedMaxPrice = $price->maxPrice;
        } else {
            $extractedMinPrice = 0;
            $extractedMaxPrice = 0;
        }

        $minPrice = $request->input("minPrice", $extractedMinPrice);
        $maxPrice = $request->input("maxPrice", $extractedMaxPrice);
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
                ["price", "<=", $maxPrice],
                ["name", "like", "%$search%"]
            ])->paginate(20);
        }

        $recent = $allProducts;

        return view("products", [
            "products" => $products,
            "categories" => Category::all(),
            "currentCategory" => $category,
            "price" => [
                "min" => $extractedMinPrice,
                "max" => $extractedMaxPrice,
                "minValue" => $minPrice,
                "maxValue" => $maxPrice
            ],
            "search" => $search,
            "recent" => $recent,
            "route" => "products"
        ]);
    }

    public function promotions(Request $request, $category = "")
    {
        $allProducts = Product::all();
        if ($allProducts->count() <= 0) {
            return view("no-products");
        }

        $search = $request->input("q", "");

        $price = DB::table("products")->where([
            ["name", "like", "%$search%"],
            ["discount", ">", "0"]
        ])->select(DB::raw("min(price) as minPrice, max(price) as maxPrice"))->first();

        if ($price) {
            $extractedMinPrice = $price->minPrice;
            $extractedMaxPrice = $price->maxPrice;
        } else {
            $extractedMinPrice = 0;
            $extractedMaxPrice = 0;
        }

        $minPrice = $request->input("minPrice", $extractedMinPrice);
        $maxPrice = $request->input("maxPrice", $extractedMaxPrice);

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
                ["name", "like", "%$search%"],
                ["discount", ">", "0"]
            ])->paginate(2);
        } else {
            $products = Product::where([
                ["price", ">=", $minPrice],
                ["price", "<=", $maxPrice],
                ["name", "like", "%$search%"],
                ["discount", ">", "0"]
            ])->paginate(2);
        }

        $recent = $allProducts;

        return view("products", [
            "products" => $products,
            "categories" => Category::all(),
            "currentCategory" => $category,
            "price" => [
                "min" => $extractedMinPrice,
                "max" => $extractedMaxPrice,
                "minValue" => $minPrice,
                "maxValue" => $maxPrice
            ],
            "search" => $search,
            "recent" => $recent,
            "route" => "discounts"
        ]);
    }
}
