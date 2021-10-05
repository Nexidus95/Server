<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Assembly;
class AssemblyController extends Controller
{
    public function index()
    {
        return Assembly::all();
    }
 
    public function show(Assembly $assembly)
    {
        return $assembly;
    }

    public function store(Request $request)
    {
        $assembly = Assembly::create($request->all());

        return response()->json($assembly, 201);
    }

    public function update(Request $request, Assembly $assembly)
    {
        $assembly->update($request->all());

        return response()->json($assembly, 200);
    }

    public function delete(Assembly $assembly)
    {
        $assembly->delete();

        return response()->json(null, 204);
    }
}
