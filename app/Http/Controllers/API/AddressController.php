<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $address = Address::query();
        if ($request->state) {
            $value = $request->state;
            $address->where('state', $value);
        } elseif ($request->city) {
            $value = $request->city;
            $address->where('city', $value);
        }
        $data = $address->get();
        if (!isset($value)) {
            return response()->json(AddressResource::collection($data));
        }
        return response()->json([$value => AddressResource::collection($data)]);
    }

}