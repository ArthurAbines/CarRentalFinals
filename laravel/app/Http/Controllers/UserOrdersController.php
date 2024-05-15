<?php

namespace App\Http\Controllers;

use App\Models\UserOrdersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userOrders = UserOrdersModel::all();
        return response()->json($userOrders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $userOrder = new UserOrdersModel($request->all());


        $userOrder = UserOrdersModel::create($request->all());
        return response()->json($userOrder, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userOrder = UserOrdersModel::find($id);
        if (!$userOrder) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        return response()->json($userOrder);
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
        $userOrder = UserOrdersModel::find($id);
        if (!$userOrder) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        $validator = Validator::make($request->all(), [
            // Define validation rules for your user orders fields here
            'user_id' => 'required|integer',
            'car_id' => 'required|integer',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'Total' => 'required|integer',
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 400);
        }

        $userOrder->update($request->all());

        return response()->json($userOrder, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userOrder = UserOrdersModel::find($id);
        if (!$userOrder) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        $userOrder->delete();

        return response()->json(null, 204);
    }
}
