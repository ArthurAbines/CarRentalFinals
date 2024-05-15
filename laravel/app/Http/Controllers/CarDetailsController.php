<?php

namespace App\Http\Controllers;

use App\Models\CarDetailsModel;
use Illuminate\Http\Request;
use Validator;

class CarDetailsController extends Controller
{
    public function index()
    {
        // Retrieve all car details
        $carDetails = CarDetailsModel::all();
        return response()->json($carDetails);
    }
    
    public function show($id)
    {
        // Retrieve a specific car details record
        $carDetails = CarDetailsModel::find($id);
        if (!$carDetails) {
            return response()->json(['error' => 'Car not found'], 404);
        }
        return response()->json($carDetails);
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'car_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 400);
        }

        $carDetails = new CarDetailsModel([
            'car_name' => $request->car_name,
            'car_discription' => $request->car_discription,
            'body_type' => $request->body_type,
            'no_seats' => $request->no_seatsno_seats,
            'fuel' => $request->fuel,
            'transmission' => $request->transmission,
            'airbags' => $request->airbags,
            'front_parking_sensors' => $request->front_parking_sensors,
            'rear_parking_sensors' => $request->rear_parking_sensors,
            'drivetrain' => $request->drivetrain,
            'fuel_capacity' => $request->fuel_capacity,
            'fuel_consumption' => $request->fuel_consumption,
            'fuel_efficient' => $request->fuel_efficient,
            'push_start_Button' => $request->push_start_Button,
            'power_windows' => $request->power_windows,
            'navigation_ready' => $request->navigation_ready,
            'key_less_entry' => $request->key_less_entry,
            'pricing' => $request->pricing,
        ]);

        //Image Upload
        if ($request->hasFile('car_images1')) {
            $carPath = $request->file('car_images1')->store('carImages', 'public');
            $carDetails->car_images1 = '/storage/' . $carPath;
        }
        if ($request->hasFile('car_images2')) {
            $carPath = $request->file('car_images2')->store('carImages', 'public');
            $carDetails->car_images2 = '/storage/' . $carPath;
        }
        if ($request->hasFile('car_images3')) {
            $carPath = $request->file('car_images3')->store('carImages', 'public');
            $carDetails->car_images3 = '/storage/' . $carPath;
        }
        if ($request->hasFile('car_logo')) {
            $carPath = $request->file('car_logo')->store('carLogos', 'public');
            $carDetails->car_logo = '/storage/' . $carPath;
        }

        $carDetails->save();
        return response()->json([
            "status" => 1,
            "message" => "Car added successfully",
            "carDetails" => $carDetails
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $carDetails = CarDetailsModel::find($id);
        if (!$carDetails) {
            return response()->json(['error' => 'Car not found'], 404);
        }
        
        $carDetails->update($request->all());

        //Image Upload
        if ($request->hasFile('car_images1')) {
            $carPath = $request->file('car_images1')->store('carImages', 'public');
            $carDetails->car_images1 = '/storage/' . $carPath;
        }
        if ($request->hasFile('car_images2')) {
            $carPath = $request->file('car_images2')->store('carImages', 'public');
            $carDetails->car_images2 = '/storage/' . $carPath;
        }
        if ($request->hasFile('car_images3')) {
            $carPath = $request->file('car_images3')->store('carImages', 'public');
            $carDetails->car_images3 = '/storage/' . $carPath;
        }
        if ($request->hasFile('car_logo')) {
            $carPath = $request->file('car_logo')->store('carLogos', 'public');
            $carDetails->car_logo = '/storage/' . $carPath;
        }
        
        $carDetails->save();
        
        return response()->json([
            "status" => 1,
            "message" => "Car updated successfully",
            "carDetails" => $carDetails
        ], 200);
    }

    public function destroy($id)
    {
        // Find the car details record by id and delete it
        $carDetails = CarDetailsModel::find($id);
        if (!$carDetails) {
            return response()->json(['error' => 'Car not found'], 404);
        }
        $carDetails->delete();

        return response()->json(null, 204);
    }
    
}
