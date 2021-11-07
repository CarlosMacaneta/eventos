<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestRequest;
use App\Models\Guest;

class GuestController extends Controller
{
    public function store(GuestRequest $request)
    {
        Guest::create($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        if(!$guest = Guest::find($id)){
            return redirect()->back();
        }

        return response()->json($guest, 200);
    }

    public function update(GuestRequest $request, $id)
    {
        if (!$guest = Guest::find($id)) {
            return redirect()->back();
        }
        
        $guest->update($request->all());

        return response()->json(['message' => 'success'], 200);
    }

    public function destroy($id)
    {
        if (!$guest = Guest::find($id)) {
            return redirect()->back();
        }

        $guest->delete();

        return redirect()->back();
    }
}
