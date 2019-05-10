<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'name', 'description', 'price', 'stock', 'discount', 'user_id'];

    public function reviews()
    {
       return $this->hasMany(Review::class);
    }
}
