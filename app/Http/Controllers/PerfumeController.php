<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use Illuminate\Support\Facades\Validator;

class PerfumeController extends Controller
{
    public function index()
    {
        return response()->json(Perfume::all(), 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'marca' => 'required|string',
            'nombre' => 'required|string',
            'notas' => 'required|string',
            'tamaño' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Error al crear el registro", "errors" => $validator->errors()], 400);
        }

        $perfume = Perfume::create($request->all());
        return response()->json(["message" => "Registro exitoso", "data" => $perfume], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'marca' => 'required|string',
            'nombre' => 'required|string',
            'notas' => 'required|string',
            'tamaño' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Error al actualizar el registro", "errors" => $validator->errors()], 400);
        }

        $perfume = Perfume::find($id);
        if (!$perfume) {
            return response()->json(["message" => "Perfume no encontrado"], 404);
        }

        $perfume->update($request->all());
        return response()->json(["message" => "Actualización exitosa", "data" => $perfume], 200);
    }

    public function destroy($id)
    {
        $perfume = Perfume::find($id);
        if (!$perfume) {
            return response()->json(["message" => "Perfume no encontrado"], 404);
        }

        $perfume->delete();
        return response()->json(["message" => "Eliminación exitosa"], 200);
    }
}