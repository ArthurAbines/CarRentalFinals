<?php

namespace App\Http\Controllers;

use App\Models\CarProsConsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarProsConsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all car pros and cons
        $carProsCons = CarProsConsModel::all();
        return response()->json($carProsCons);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'car_id' => 'required|integer',
            'pros' => 'nullable|string',
            'cons' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 400);
        }

        // Create a new car pros and cons instance
        $carProsCons = CarProsConsModel::create($request->all());

        return response()->json($carProsCons, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve a specific car pros and cons record
        $carProsCons = CarProsConsModel::find($id);
        if (!$carProsCons) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        return response()->json($carProsCons);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the car pros and cons record by id
        $carProsCons = CarProsConsModel::find($id);

        if (!$carProsCons) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'car_id' => 'required|integer',
            'pros' => 'nullable|string',
            'cons' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 400);
        }

        // Update the car pros and cons record
        $carProsCons->update($request->all());

        return response()->json($carProsCons, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the car pros and cons record by id and delete it
        $carProsCons = CarProsConsModel::find($id);
        if (!$carProsCons) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        $carProsCons->delete();

        return response()->json(null, 204);
    }
}
