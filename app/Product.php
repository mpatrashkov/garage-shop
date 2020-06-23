<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $attributes = [
        "image" => "",
        "description" => "",
        "discount" => 0,
        "price" => 0
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
