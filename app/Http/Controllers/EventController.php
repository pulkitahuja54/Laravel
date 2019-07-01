<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('index', compact('events'));  
    }

    public function apiindex()
    {
        $events = Event::all();
        return response()->json($events);    
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
            ]);
        $event=Event::create($validatedData);

        return redirect('/events')->with('success', 'Event is successfully saved');
       
    }

    public function apistore(Request $request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
            ]);
        $event=Event::create($validatedData);
        return response()->json($event,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('edit', compact('event'));
    }

    public function apiedit($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
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
        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
        ]);
        $event=Event::whereId($id)->update($validatedData);

        return redirect('/events')->with('success', 'Event is successfully updated');
    }

    public function apiupdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
        ]);
        $event=Event::whereId($id)->update($validatedData);

        return response()->json($event, 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event is successfully deleted');
    }

        public function apidestroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json(null, 204);
    }
}

