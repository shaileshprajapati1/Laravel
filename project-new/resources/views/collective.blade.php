@extends('layouts.appcustome')

@section('content')
<div class="form-group">
    <label for="bank_name">Bank Name</label>
    {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}
</div>

@endsection