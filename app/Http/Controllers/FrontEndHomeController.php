<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\Category;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        // Load your objects
        $categories = Category::all();

        // Make it available to all views by sharing it
        view()->share('categories', $categories);
    }

    public function index()
    {    
        // Sort in random order
         $products = Product::inRandomOrder()->paginate(8);
         $categories = Category::all();
         return view('frontend.home.index',compact('products','categories'));
    }

     public function product($id)
    {    
         // Sort product by category
         $products = Product::where('category_id',$id)->get();
         $category_id = Category::findOrFail($id);

         return view('frontend.home.product',compact('products','category_id'));
    }

    

     public function contact()
    {
        return view('frontend.home.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    { 
        $query = request()->input('query');
        $products = Product::where('name','like',"%$query%")->get();
        
        return view('frontend.home.search',compact('products','query'));
       
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $products = Product::whereSlug($slug)->first();
       //Get four related products
       $interested = Product::where('slug', '!=', $slug)->get()->random(4);
       return view('frontend.home.show',compact('products','interested'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function charge(Request $request)
    {

        $num = Cart::total(); 

        try {

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Customer::create(array(
            'email' => $request->stripeEmail,
            'source' => $request->stripeToken
        ));
        
        $charge = Charge::create(array(
            'customer' => $customer->id,
            'amount' => number_format($num, 2)*100,
            'currency' => 'usd'
        ));
        
           Mail::to($customer['email'])->send(new \App\Mail\Mymail);
           Mail::to(env('MAIL_USERNAME'))->send(new \App\Mail\Newmail);

           return redirect()->back()->with('success','Transfer successful');

          

        } 
        catch (\Exception $ex) 
        {
            return $ex->getMessage();
        }

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
