<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model {
    protected $fillable = [
        'customer_name',
        'customer_email',
        'question'
    ];
}
