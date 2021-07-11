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
        // $count = 0;
        // foreach ( as $c){
        //     $count++;
        // }
        return ((json_decode($request->categories, false)));
        
        $model = Model::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);
        

        // check if detail
        // $detail = $request->detail;
        // if ($detail) {
        //     ProductDetail::create([
        //         'category' => $detail->category
        //     ]);
        // }

        try{
            // check if image
            if ($request->hasFile('images')) {
                $image = $request->file('images');
                $image->extension = $image->getClientOriginalExtension();
                $image->original_name = $image->getClientOriginalName();
                $name = time() .'_'. $image->original_name;
                Storage::disk('public_img')->put($name, File::get($image));
                $image->name = $name;
            } else  {
                $image->name = "default.png";
                $image->original_name = "default.png";
            }

            $product_id = Model::where('name', $request->name)->first()->id;

            ProductImage::create([
                'product_id' => $product_id,
                'filename' => $image->name,
                'dir' => '/storage/public/images',
                'is_thumbnail' => false
            ]);
            

            // check if link
            // $links = $request->links;
            // foreach ($links as $link) {
                // ProductLink::create([
                //     'product_id' => $model->id,
                //     'name' => $link->name,
                //     'link' => $link->link,
                //     'link_alt' => $link->link_alt
                // ]);
            // }
            return response()->json([
                'message' => 'Success',
                'req' => $request
            ]);
        }
        // return redirect()->route('product.index');
        catch(\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'req' => $request
            ], 500);
        }
        

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
