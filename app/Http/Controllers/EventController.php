<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {
        $events = Event::get();

        return view("", compact($events));
    }

    public function create() 
    {
        return view("");
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

        return view('', compact($event));
    }

    public function edit($id) 
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        return view('', compact($event));
    }

    public function update(EventRequest $request, $id)
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        $event->update($request->all());

        return view('', compact($event));
    }

    public function destroy($id)
    {
        if ($event = Event::find()) {
            return redirect()->back();
        }

        $event->delete();

        return view('', compact($event));
    }
}
