<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('cms.events.index', compact('events') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.events.create');
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

        $event = new Event();
        $event->fill( $request->except('image') );
        $event->save();
        $event->image = "event-main-$event->id";
        $event->save();

        $this->saveRequestFile( $request->image , "event-main-$event->id" , "/files/events/$event->id" );

        // foreach($request->gallary as $image){
        //     $events_images = new events_images();
        //     $events_images->event_id = $event->id;
        //     $events_images->save();
        //     $events_images->image = "event-gallary-$event->id";
        //     $events_images->save();
        //     $this->saveRequestFile( $request->image , "event-gallary-$events_images->id" , "/files/events/$event->id/gallary" );
        // }

        return redirect()->route('cms.events.index')
                        ->with('success','Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('cms.events.show', compact('event') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('cms.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
 
        $file = $this->findFirstFile("/files/events/$event->id", $event->image);
        if($file){
            Storage::delete($file);
        };

        $event->fill( $request->except('image') );
        $event->save();
        $event->image = "event-main-$event->id";
        $event->save();

        $this->saveRequestFile( $request->image , "event-main-$event->id" , "/files/events/$event->id" );
 
        return redirect()->route('cms.events.index')
                        ->with('success','Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('cms.events.index')
                        ->with('success','Event deleted successfully.');
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
