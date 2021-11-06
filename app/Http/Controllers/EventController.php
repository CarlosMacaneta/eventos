<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(7);

        return view('events.index', compact('events'));
    }

    /**
     * Show event form view
     *
     * @return void
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Stores a event into a table in a database
     *
     * @param EventRequest $request
     * @return void
     */
    public function store(EventRequest $request)
    {
        Event::create($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        if (!$event = Event::find($id)) {
            return redirect()->back();
        }
        
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        if (!$event = Event::find($id)) {
            return redirect()->back();
        }

        return view('events.edit', compact('event'));
    }

    public function update(EventRequest $request, $id)
    {
        if (!$event = Event::find($id)) {
            return redirect()->back();
        }

        $event->update($request->all());

        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        if (!$event = Event::find($id)) {
            return redirect()->back();
        }

        $event->delete();

        return redirect()->route('events.index');
    }
}
