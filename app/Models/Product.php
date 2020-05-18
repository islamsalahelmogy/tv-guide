<?php

namespace App\Models;

use App\Models\User;
use App\Models\Brand;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name'
    ];

    public function category() {

        return $this->belongsTo(Category::class);
    }

    public function brand() {

        return $this->belongsTo(Brand::class);
    }

    public function seller() {

        return $this->belongsTo(User::class,'seller_id');
    }
}
