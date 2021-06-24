<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->hasOne(ProductDetail::class, 'detail_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'image_id');
    }
}
