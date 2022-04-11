<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('cms.projects.index', compact('projects') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.projects.create');
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

        $project = new Project();
        $project->fill( $request->except('image') );
        $project->save();
        $project->image = "project-main-$project->id";
        $project->save();

        $this->saveRequestFile( $request->image , "project-main-$project->id" , "/files/projects/$project->id" );

        foreach($request->gallary as $image){
            $projects_images = new projects_images();
            $projects_images->project_id = $project->id;
            $projects_images->save();
            $projects_images->image = "project-gallary-$project->id";
            $projects_images->save();
            $this->saveRequestFile( $request->image , "project-gallary-$projects_images->id" , "/files/projects/$project->id/gallary" );
        }
       
        return redirect()->route('cms.projects.index')
                        ->with('success','project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('cms.projects.show', compact('project') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('cms.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
 
        $file = $this->findFirstFile("/files/projects/$project->id", $project->image);
        if($file){
            Storage::delete($file);
        };

        $project->fill( $request->except('image') );
        $project->save();
        $project->image = "project-main-$project->id";
        $project->save();

        $this->saveRequestFile( $request->image , "project-main-$project->id" , "/files/projects/$project->id" );
 
        return redirect()->route('cms.projects.index')
                        ->with('success','project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('cms.projects.index')
                        ->with('success','project deleted successfully.');
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
