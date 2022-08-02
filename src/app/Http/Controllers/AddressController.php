<?php

namespace App\Http\Controllers;

use App\Models\address;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        return address::all();
    }

    public function show($id){
        return address::all()->where('id', $id)->first();
    }

    public function findAddress(Request $request)
    {
      return  address::find([
            'country' => $request->input('state'),
            'city' => $request->input('city'),
            'street' => $request->input('street'),
            'street_number' => $request->input('street_number'),
            'postal_code' => $request->input('zip_code'),
            //'created_at' => Carbon::now()
        ]);
    }
}
