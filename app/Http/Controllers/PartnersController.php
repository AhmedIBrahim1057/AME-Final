<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Storage;

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

        
        $partner = new Partner();
        $partner->fill( $request->except('image') );
        $partner->save();
        $partner->image = "partner-main-$partner->id";
        $partner->save();

        $this->saveRequestFile( $request->image , "partner-main-$partner->id" , "/files/partners/$partner->id" );

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
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
 
        $file = $this->findFirstFile("/files/partners/$partner->id", $partner->image);
        if($file){
            Storage::delete($file);
        };

        $partner->fill( $request->except('image') );
        $partner->save();
        $partner->image = "partner-main-$partner->id";
        $partner->save();

        $this->saveRequestFile( $request->image , "partner-main-$partner->id" , "/files/partners/$partner->id" );
 
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
