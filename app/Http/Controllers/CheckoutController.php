<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\OrderProduct;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        

        $order = Order::create([
            'user_id'      => auth()->user() ? auth()->user()->id : null, 
            'firstname'    => $request->firstname, 
            'lastname'     => $request->lastname,
            'country'      => $request->country, 
            'city'         => $request->city, 
            'postcode'     => $request->postcode, 
            'phone'        => $request->phone, 
            'email'        => $request->email, 
            'billing'      => Cart::total(), 
        ]);

        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id'  => $order->id,
                'product_id'=> $item->model->id,
                'quantity'  => $item->qty,
            ]);
        }

        Cart::instance('default')->destroy();


        return redirect()->route('shop');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
