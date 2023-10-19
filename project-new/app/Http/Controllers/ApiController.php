<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res = Product::all();
        return  $res;
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
    public function store(Request $request, Product $product)
    {


        $product->title = $request->title;
        $product->discription = $request->discription;
        $product->procut_price = $request->procut_price;
        $product->product_quntity = $request->product_quntity;
        $product->product_img = $request->image;

        $product->save();
        return true;
    }
    public function uploadimage(Request $request, Product $product)
    {
        $uploadimage = time() . '.' . $request->product_img->getClientOriginalExtension();
        $request->product_img->move(public_path('/uploads'), $uploadimage);

        return json_encode($uploadimage);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $res = Product::find($id);
        return $res;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Product $product)
    {
        $res = Product::find($id);

        $res->title = $request->title;
        $res->discription = $request->discription;
        $res->procut_price = $request->procut_price;
        $res->product_quntity = $request->product_quntity;
        $res->product_img = $request->image;
        $res->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("call");
        $product = Product::find($id);
        $product->delete();
        return true;
    }
}
