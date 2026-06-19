<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $buildings = Building::all();

        return view('buildings.index', compact('buildings'));
    }

    public function create()
    {
        return view('buildings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'building_name' => 'required'
        ]);

        Building::create([
            'building_name' => $request->building_name
        ]);

        return redirect()
            ->route('buildings.index')
            ->with('success', 'Data berhasil disimpan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $building = Building::findOrFail($id);

        return view('buildings.edit', compact('building'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'building_name' => 'required'
        ]);

        $building = Building::findOrFail($id);

        $building->update([
            'building_name' => $request->building_name
        ]);

        return redirect()
            ->route('buildings.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
{
    try {

        Building::findOrFail($id)->delete();

        return redirect()
            ->route('buildings.index')
            ->with('success','Data berhasil dihapus');

    } catch (\Exception $e) {

        return redirect()
            ->route('buildings.index')
            ->with('error',
                'Gedung masih digunakan oleh Room');
    }
}
}