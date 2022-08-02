<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\orderline;
use App\Models\User;
use App\Models\address;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Token;

class UserController extends Controller
{

    public function show($id)
    {

        $thisUser = User::all()->where('id', $id);
       //// $userAddress = User::with('addresses')->get();
         return ($thisUser);
       // return ($userAddress);
    }




}
