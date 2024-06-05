<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdectimageRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $product = Product::create($data);
        $files = $request['images'] ?? [];
        $path = "/uploads";
        foreach ($files as $file) {
            $ext = $file->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $file->move(public_path($path), $imageName);
            $image = $path . '/' . $imageName;
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $image
            ]);
            // $product->images()->create(['image_path' => $path . '/' . $imageName]);
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}