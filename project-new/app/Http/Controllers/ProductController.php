<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(product $product)
    {
        // DB::connection()->enableQueryLog();
        $products = DB::table('product')->get();
        // $queries = DB::getQueryLog();
        return view('viewallproduct', compact('products'));
        // dd($products);
        // dd($queries);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, product $product)
    {
        $product->title = $request->title;
        $product->discription = $request->discription;
        $product->procut_price = $request->procut_price;
        $product->product_quntity = $request->product_quntity;
        $product->product_img = "Defult.jpg";
        $Insert = $product->save();
        return redirect("product");
        // dd($request->all());


    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($productid, product $product)
    {
        $Allproduct = $product::find($productid);
        // return view('editproduct', compact('Allproduct'));
        return view('addproduct', compact('Allproduct'));
        // dd($Allproduct);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($productid, Request $request, product $product)
    {
        $Allproduct = $product::find($productid);
        $Allproduct->title = $request->title;
        $Allproduct->discription = $request->discription;
        $Allproduct->procut_price = $request->procut_price;
        $Allproduct->product_quntity = $request->product_quntity;
        $Allproduct->product_img = "Defult.jpg";
        $Allproduct->save();
        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productid,product $product)
    {
        $Allproduct = $product::find($productid);
        $Allproduct->delete();
        return redirect("product");
    }
}
