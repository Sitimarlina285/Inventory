<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Building;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('building')->get();

        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $buildings = Building::all();

        return view('rooms.create', compact('buildings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_name' => 'required',
            'floor' => 'required',
            'building_id' => 'required'
        ]);

        Room::create([
            'room_name' => $request->room_name,
            'floor' => $request->floor,
            'building_id' => $request->building_id
        ]);

        return redirect()
            ->route('rooms.index')
            ->with('success','Data berhasil disimpan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $room = Room::findOrFail($id);
        $buildings = Building::all();

        return view('rooms.edit', compact(
            'room',
            'buildings'
        ));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'room_name' => 'required',
            'floor' => 'required',
            'building_id' => 'required'
        ]);

        $room = Room::findOrFail($id);

        $room->update([
            'room_name' => $request->room_name,
            'floor' => $request->floor,
            'building_id' => $request->building_id
        ]);

        return redirect()
            ->route('rooms.index')
            ->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
{
    try {

        Room::findOrFail($id)->delete();

        return redirect()
            ->route('rooms.index')
            ->with('success','Data berhasil dihapus');

    } catch (\Exception $e) {

        return redirect()
            ->route('rooms.index')
            ->with('error',
                'Room masih digunakan');
    }
}
}