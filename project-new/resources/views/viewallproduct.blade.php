@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="addproduct">ADD PRODUCT</a>
                    <table class="table table-borderd">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>discription</th>
                                <th>product_price</th>
                                <th>product_quntity</th>
                                <th>product_img</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                
                            @foreach($products as $product)

                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->discription}}</td>
                                <td>{{$product->procut_price}}</td>
                                <td>{{$product->product_quntity}}</td>
                                <td>{{$product->product_img}}</td>
                                <td>
                                    <a href="editproduct/{{$product->id}}">Edit</a>
                                    &nbsp; <a href="deleteproduct/{{$product->id}}">Delete</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection