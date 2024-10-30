<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index()
    {
        return Perfume::all();
    }

    public function store(Request $request)
    {
        $perfume = Perfume::create($request->all());
        return response()->json($perfume, 201);
    }

    public function show(Perfume $perfume)
    {
        return $perfume;
    }

    public function update(Request $request, Perfume $perfume)
    {
        $perfume->update($request->all());
        return response()->json($perfume, 200);
    }

    public function destroy(Perfume $perfume)
    {
        $perfume->delete();
        return response()->json(null, 204);
    }
}
