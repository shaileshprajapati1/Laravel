@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="text-center"> {{ isset($Allproduct)? 'UPDATE' : 'ADD' }}  PRODUCT FORM</h2>
    <form action="{{ isset($Allproduct)? '/updateproduct/'.$Allproduct['id'] : 'saveproduct'   }} " method="post">
    @csrf
           
        <div class="row mb-2">
            <div class="col-6 offset-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ ($Allproduct['title'])?? ''}}" name="title" id="title">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6 offset-3">
                <label for="discription" class="form-label">Discription</label>
                <input type="text" class="form-control" value="{{ ($Allproduct['discription'])?? ''}}" name="discription" id="discription">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6 offset-3">
                <label for="procut_price" class="form-label">Product_price</label>
                <input type="text" class="form-control" value="{{ ($Allproduct['procut_price'])?? ''}}" name="procut_price" id="procut_price">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6 offset-3">
                <label for="product_quntity" class="form-label">Product_quntity</label>
                <input type="text" class="form-control" value="{{ ($Allproduct['product_quntity']) ?? '' }}"  name="product_quntity" id="product_quntity">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6 offset-5">
                <input class="btn btn-secondary" type="submit" name="add_prod" id="add_prod" value="{{ isset($Allproduct)? 'UPDATE PRODUCT' : 'ADD PRODUCT' }}"> 
             &nbsp;  <?php if(!isset($Allproduct)){ ?> <input class="btn btn-danger" type="reset"  value="CANCEL">  <?php } ?>  
            </div>
        </div>
       
    </form>
</div>
@endsection