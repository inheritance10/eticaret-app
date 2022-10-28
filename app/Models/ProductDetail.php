<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
