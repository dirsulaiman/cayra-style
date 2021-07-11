<?php

namespace App\Models;

use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    use Uuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'product_id',
        'category'
    ];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'detail_id');
    // }
}
