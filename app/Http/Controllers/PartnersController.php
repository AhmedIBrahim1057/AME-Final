<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('cms.partners.index', compact('partners') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.partners.create');
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
            'name' => 'required',
            'image' => 'required',
            'url' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads/partners'), $imageName);

        Partner::create([
            'type' => $request->type ,
            'name' => $request->name ,
            'image' => $imageName ,
            'url' => $request->url
        ]);

        return redirect()->route('cms.partners.index')
                        ->with('success','Partner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::find($id);
        return view('cms.partners.show', compact('partner') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('cms.partners.edit', compact('partner'));
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
            'name' => 'required',
            'url' => 'required',
        ]);
 
 
        $partner = Partner::find($id);
        $partner->type = $request->get('type');
        $partner->name = $request->get('name');
        $partner->description = $request->get('description');
        $partner->image = $request->get('image');
        $partner->url = $request->get('url');
        $partner->update();
 
        return redirect()->route('cms.partners.index')
                        ->with('success','Partner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->route('cms.partners.index')
                        ->with('success','Partner deleted successfully.');
    }
}
