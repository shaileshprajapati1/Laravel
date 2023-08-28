<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use DB;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(product $product)
    {
        $Allproduct = DB::table('products')->get();
        // dd($Allproduct);
        return view('allproduct', compact('Allproduct'));
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
        // dd('called');
        $product->title = $request->title;
        $product->discription = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $product->save();
        return redirect('product');
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
    public function edit($pid, product $product)
    {
        $allproduct = $product::find($pid);
        // dd($product);
        return view('updateproduct', compact('allproduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($pid, Request $request, product $product)
    {
        $allproduct = $product::find($pid);
        // dd($allproduct);
        $allproduct->title = $request->title;
        $allproduct->discription = $request->description;
        $allproduct->quantity = $request->quantity;
        $allproduct->price = $request->price;

        $allproduct->save();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pid,product $product)
    {
        $allproduct = $product::find($pid);
        $allproduct->delete();
        return redirect('product');
    }
}
