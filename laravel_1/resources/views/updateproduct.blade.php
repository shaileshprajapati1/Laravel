@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">UPDATE PRODUCT</h2>
    <form action="/updateproduct/{{$allproduct->id}}" method="post">
        @csrf
        <div class="row">
            <div class="col-6 offset-3 mb-2">
                <label class="label-control" for="title">Title</label>
                <input type="text" name="title" id="title" value="{{$allproduct->title}}" class="form-control" placeholder="Enter Title.....">
            </div>
            <div class="col-6 offset-3 mb-2">
                <label class="label-control" for="description">Description</label>
                <input type="text" name="description" value="{{$allproduct->discription}}" id="description" class="form-control" placeholder="Enter description.....">
            </div>
            <div class="col-6 offset-3 mb-2">
                <label class="label-control" for="quantity">Quantity</label>
                <input type="num" name="quantity" value="{{$allproduct->quantity}}" id="quantity" class="form-control" placeholder="Enter quantity.....">
            </div>
            <div class="col-6 offset-3 mb-2">
                <label class="label-control" for="price">Price</label>
                <input type="num" name="price" value="{{$allproduct->price}}" id="price" class="form-control" placeholder="Enter price.....">
            </div>
            <div class="col-6 offset-4 mb-2">
               <input type="submit" class="btn btn-success" name="updateproduct" id="updateproduct" value="UPDATE PRODUCT">&nbsp;
              
               
            </div>
        </div>
    </form>
</div>
@endsection