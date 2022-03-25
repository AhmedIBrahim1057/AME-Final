<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Storage;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('cms.clients.index', compact('clients') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.clients.create');
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

        $client = new client();
        $client->fill( $request->except('image') );
        $client->save();
        $client->image = "client-main-$client->id";
        $client->save();

        $this->saveRequestFile( $request->image , "client-main-$client->id" , "/files/clients/$client->id" );

        return redirect()->route('cms.clients.index')
                        ->with('success','client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('cms.clients.show', compact('client') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('cms.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'url' => 'required',
        ]);
 
        $file = $this->findFirstFile("/files/clients/$client->id", $client->image);
        if($file){
            Storage::delete($file);
        };

        $client->fill( $request->except('image') );
        $client->save();
        $client->image = "client-main-$client->id";
        $client->save();

        $this->saveRequestFile( $request->image , "client-main-$client->id" , "/files/clients/$client->id" );
 
        return redirect()->route('cms.clients.index')
                        ->with('success','client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('cms.clients.index')
                        ->with('success','client deleted successfully.');
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
