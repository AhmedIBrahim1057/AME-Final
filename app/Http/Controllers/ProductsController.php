<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('cms.products.index', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'date' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads/products'), $imageName);

        Product::create([
            'type' => $request->type ,
            'title' => $request->title ,
            'description' => $request->description ,
            'image' => $imageName ,
            'date' => $request->date
        ]);

        return redirect()->route('cms.products.index')
                        ->with('success','product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('cms.products.show', compact('product') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('cms.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
 
 
        $product = Product::find($id);
        $product->type = $request->get('type');
        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->image = $request->get('image');
        $product->date = $request->get('date');
        $product->update();
 
        return redirect()->route('cms.products.index')
                        ->with('success','product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('cms.products.index')
                        ->with('success','product deleted successfully.');
    }
}
