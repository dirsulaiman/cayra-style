<?php

namespace App\Models;

use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    use Uuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'product_id',
        'filename',
        'dir',
        'is_thumbnail'
    ];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'image_id');
    // }
}
