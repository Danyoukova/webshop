<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\customer;
use App\Models\order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    public function index()
    {
        return view('checkout1');
    }


    public function purchase(Request $request)
    {    //check if customer exists
        //$customer = customer::where('user_id', Auth::id())->get();

        //check if address exists
        $address = address::firstOrCreate([
            'country' => $request->input('state'),
            'city' => $request->input('city'),
            'street' => $request->input('street'),
            'street_number' => $request->input('street_number'),
            'postal_code' => $request->input('zip_code'),
            'created_at' => Carbon::now()
        ]);

        $user = User::firstOrCreate(
            [
                'email' => $request->input('email')
            ],

            ['password' => Hash::make('test123456'),
                'name' => $request->input('first_name') . ' ' . $request->input('last_name'),
                'role_id' => 3
            ]
        );
        User::updateOrCreate(
            ['email' => $user->email],
            [
                'shipping_address_id' => $address->id,
                'billing_address_id' => $address->id
            ]);

        if ($user->stripe_id === null) {
            $user->createOrGetStripeCustomer();
        }

        try {
            $payment = $user->charge(
                $request->input('amount'),
                $request->input('payment_method_id')
            );

            $payment = $payment->asStripePaymentIntent();
            $order = Order::insert
            ([
                'customer_id' => $user->id,
                'billing_address_id' => $address->id,
                'shipping_address_id' => $address->id,
                // 'vat_amount' =>  ,
                'date_time' => Carbon::now(),
                'created_at' => Carbon::now(),
                'total_amount' => ($payment->charges->data[0]->amount) / 100
            ]);
//            $orderLine = orderLine::insert([
//                'product_id',
//                'order_id',
//                'quantity',
//                'created_at' => Carbon::now()
//            ]);


            return $order;
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }
}
