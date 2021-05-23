<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestRequest;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guest = Guest::all();

        return view('guests.index', compact($guest));
    }

    public function create() 
    {
        return view('guests.create');
    }

    public function store(GuestRequest $request)
    {
        Guest::create($request->all());

        return redirect()->back();
    }

    public function show($id) 
    {
        if ($guest = Guest::find($id)) {
            return redirect()->back();
        }

        return view('guests.show', compact($guest));
    }

    public function edit($id)
    {
        return view('guests.edit');
    }

    public function update(GuestRequest $request, $id) 
    {
        if ($guest = Guest::find($id)) {
            return redirect()->back();
        }

        $guest->update($request->all());

        return view('guests.update', compact($guest));
    }

    public function destroy($id)
    {
        if ($guest = Guest::find($id)) {
            return redirect()->back();
        }

        $guest->delete();

        return view('guests.destroy', compact($guest));
    }
}
