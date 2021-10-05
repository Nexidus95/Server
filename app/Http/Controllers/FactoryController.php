<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Factory;

class FactoryController extends Controller
{
    public function index()
    {
        return Factory::all();
    }
 
    public function show(Factory $factory)
    {
        return $factory;
    }

    public function store(Request $request)
    {
        $factory = Factory::create($request->all());

        return response()->json($factory, 201);
    }

    public function update(Request $request, Factory $factory)
    {
        $factory->update($request->all());

        return response()->json($factory, 200);
    }

    public function delete(Factory $factory)
    {
        $factory->delete();

        return response()->json(null, 204);
    }
}
