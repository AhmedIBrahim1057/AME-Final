<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('cms.news.index', compact('news') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.news.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required',
        ]);
      
        $news = new News();
        $news->fill( $request->except('image') );
        $news->save();
        $news->image = "news-main-$news->id";
        $news->save();

        $this->saveRequestFile( $request->image , "news-main-$news->id" , "/files/news/$news->id" );
       
        return redirect()->route('cms.news.index')
                        ->with('success','News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('cms.news.show', compact('news') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('cms.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
 
 
        $file = $this->findFirstFile("/files/news/$news->id", $news->image);
        if($file){
            Storage::delete($file);
        };

        $news->fill( $request->except('image') );
        $news->save();
        $news->image = "news-main-$news->id";
        $news->save();

        $this->saveRequestFile( $request->image , "news-main-$news->id" , "/files/news/$news->id" );
 
        return redirect()->route('cms.news.index')
                        ->with('success','News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('cms.news.index')
                        ->with('success','News deleted successfully.');
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
