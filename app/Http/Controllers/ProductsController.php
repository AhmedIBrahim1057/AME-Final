<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;

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

        $product = new Product();
        $product->fill( $request->except('image') );
        $product->save();
        $product->image = "product-main-$product->id";
        $product->save();

        $this->saveRequestFile( $request->image , "product-main-$product->id" , "/files/products/$product->id" );

        // foreach($request->gallary as $image){
        //     $products_images = new products_images();
        //     $products_images->product_id = $product->id;
        //     $products_images->save();
        //     $products_images->image = "product-gallary-$product->id";
        //     $products_images->save();
        //     $this->saveRequestFile( $request->image , "product-gallary-$products_images->id" , "/files/products/$product->id/gallary" );
        // }

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
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
 
        $file = $this->findFirstFile("/files/products/$product->id", $product->image);
        if($file){
            Storage::delete($file);
        };

        $product->fill( $request->except('image') );
        $product->save();
        $product->image = "product-main-$product->id";
        $product->save();

        $this->saveRequestFile( $request->image , "product-main-$product->id" , "/files/products/$product->id" );
 
 
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

    function findFirstFile($folder, $findFileName) {
    
        $filesPaths = $this->findFiles($folder, $findFileName);

        if(count($filesPaths)>0) {
            return $filesPaths[0];
        }

        return false;
    }

    function findFiles($folder, $findFileName) {

        $allFilesPaths = Storage::disk('local')->files($folder);
        $filesPaths = [];
        foreach ($allFilesPaths as $filePath) {
            $fileName = pathinfo($filePath, PATHINFO_FILENAME);
            if($fileName==$findFileName) {
                $filesPaths[] = $filePath;
            }
        }

        return $filesPaths;
    }

    function saveRequestFile($file, $name, $folder) {

        $title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->putFileAs($folder, $file, "$name.$extension");

        return "$title.$extension";
    }
}
