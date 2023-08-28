@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">All Product</h1>
        <a href="addproduct">ADD PRODUCT</a>
        <table class="table table-bordered table-primary">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Discription</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Allproduct as $product)
                <tr>
                    <td>{{ $product->title}}</td> 
                    <td>{{ $product->discription}}</td> 
                    <td>{{ $product->quantity}}</td> 
                    <td>{{ $product->price}}</td>
                    <td>
                        <a href="editproduct/{{ $product->id}}">Edit</a>
                       &nbsp; &nbsp; <a href="deleteproduct/{{ $product->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection