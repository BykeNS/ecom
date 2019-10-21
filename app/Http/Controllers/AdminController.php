<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['getStripe']]);
        // Load your objects
        $categories = Category::all();

        // Make it available to all views by sharing it
        view()->share('categories', $categories);

    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.dashboard.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.dashboard.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:products|max:255',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'slug',

        ]);
        $categories = Category::all();

        $products = new Product;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->category_id = $request->category_id;
        $products->slug = str_slug($request->name);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 450)->save(public_path('/images/' . $filename));

            $products->image = $filename;
        }

        $products->save();

        return redirect('/admin')->with('success', 'New Product submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function getStripe()
    {
        return view('frontend.home.get');
    }

    public function storeStripe(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {
        // $products = Product::findOrFail($id);

        return view('backend.dashboard.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image',
            'slug',
        ]);
        //$products = Product::findOrFail($id);
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->slug = str_slug($request->name);

        if ($request->hasFile('image')) {
            $productImage = public_path("images/{$products->image}");
            if ($productImage) {
                unlink($productImage);
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(400, 300)->save(public_path('/images/' . $filename));

                $products->image = $filename;
            }

        }

        $products->update();

        return redirect('/admin')->with('success', ' Product ' . $products->name . ' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        // $products=Product::findOrFail($id);
        $products->delete();
        return redirect('/admin')->with('danger', ' Product ' . $products->name . ' has been deleted!!!');
    }
}
