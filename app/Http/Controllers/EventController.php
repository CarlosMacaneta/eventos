<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {
        $events = Event::all();

        return view('events.index', compact($events));
    }

    public function create() 
    {
        return view('events.create');
    }

    public function store(EventRequest $request) 
    {
        Event::create($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        return view('events/show', compact($event));
    }

    public function edit($id) 
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        return view('events/edit', compact($event));
    }

    public function update(EventRequest $request, $id)
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        $event->update($request->all());

        return view('events/update', compact($event));
    }

    public function destroy($id)
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        $event->delete();

        return view('events/destroy', compact($event));
    }
}
