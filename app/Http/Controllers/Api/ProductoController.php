<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::with('categoria')->get(), 200);
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }

    public function show(string $id)
    {
        $producto = Producto::with('categoria')->find($id);
        if(!$producto) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($producto, 200);
    }

    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
        if(!$producto) return response()->json(['mensaje' => 'No encontrado'], 404);
        $producto->update($request->all());
        return response()->json($producto, 200);
    }

    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        if(!$producto) return response()->json(['mensaje' => 'No encontrado'], 404);
        $producto->delete();
        return response()->json(['mensaje' => 'Eliminado correctamente'], 200);
    }
}