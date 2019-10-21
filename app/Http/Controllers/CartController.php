<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

        Cart::add($request->id, $request->name, 1, $request->price, $options = ['image' => $request->image])->associate('App\Product');

        return redirect()->back()->with('success', 'Item ' . $request->name . ' was added to your cart!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('checkout.checkout', compact('categories', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cart)
    {

        Cart::update($cart, $request->qty);

        return redirect('checkout')->with('success', 'Item ' . $request->name . ' was updated to your cart!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function RemoveCart($rowid)
    {

        Cart::remove($rowid);
        return redirect()->back()->with('danger', 'Item  was removed from your cart!');

    }

}
