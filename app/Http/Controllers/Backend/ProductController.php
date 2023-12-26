<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::orderBy('id', 'DESC')->get();
        return view('backend.pages.product.index',compact('products'));
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.product.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        if ($request->hasFile('image')) {
            $destinationPath= 'public/Product-image/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $product->image = $fileName;
        }

        $product->name        = $request->name;
        $product->price        = $request->price;
        $product->save();
        return redirect(route('product.index'))->with('message', 'Product  Create Successfully.');
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
    public function edit(Product $product)
    {
        
        return view('backend.pages.product.edit',compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        if ($request->hasFile('image')) {
            $destinationPath= 'public/Product-image/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $product->image = $fileName;
        }

        $product->name        = $request->name;
        $product->price        = $request->price;
        $product->update();
        return redirect(route('product.index'))->with('message', 'Product  Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('message', 'Product Deleted successfully.');
    }
}
