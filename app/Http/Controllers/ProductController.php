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

    public function dummy ($id, $image) {
        $model = Model::where('id', $id);
        $model->image_id = $image;
        // $model->update();
    }

    public function create()
    {
        return Inertia::render('Products/Create', []);
    }

    public function store(Request $request)
    {
        $model = Model::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);
        // check if image
        // check if detail
        // check if link
        $model->save();

    }

    public function show($id)
    {
        // return view
    }

    public function edit($id)
    {
        // return view
    }

    public function update(Request $request, $id)
    {
        $model = Model::where('id',  $id);
        $model->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);
    }

    public function destroy($id)
    {
        Model::destroy($id);
    }
}
