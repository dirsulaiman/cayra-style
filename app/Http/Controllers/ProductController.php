<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;
use App\Models\Product as Model;
use App\Models\ProductDetail;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function index () {
        $model = Model::all();
        return Inertia::render('Products', ['products' => $model]);
    }

    public function detail (Request $request, $id) {
        return;
    }
}
