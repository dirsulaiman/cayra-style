<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;
use App\Models\Product as Model;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;

use Storage;
use File;

class ProductController extends Controller
{
    public function index () {
        $model = Model::all();
        return Inertia::render('Products', ['products' => $model]);
    }

    public function save_image (Request $request) {
        $image = "";
        if ($request['image']) {
            $image = $request['image'];
            $extension = $image->getClientOriginalExtension();
            $name = time() .'_'. $image->getClientOriginalName();
            Storage::disk('public_img')->put($name, File::get($image));
            $image->name = $name;
        } else  {
            $iamge->name = "default.png";
        }
    }

    public function create()
    {
        return Inertia::render('Product/Create', []);
    }

    public function store(Request $request)
    {
        $model = Model::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        // check if detail
        $detail = $request->detail;
        if ($detail) {
            ProductDetail::create([
                'category' => $detail->category
            ]);
        }

        // check if image
        $images = $request->images;
        foreach ($images as $image) {
            ProductImage::create([
                'product_id' => $model->id,
                'filename' => $image->filename,
                'dir' => $image->dir,
                'is_thumbnail' => $image->is_thumbnail
            ]);
        }
        
        // check if link
        $links = $request->links;
        foreach ($links as $link) {
            ProductImage::create([
                'product_id' => $model->id,
                'name' => $link->name,
                'link' => $link->link,
                'link_alt' => $link->link_alt
            ]);
        }

        return redirect()->route('product.index');
        // return $model;

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
