@extends('layouts.appcustome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-9">
                            {{ __('Dashboard') }}</div>

                   </div>
                    <div class="col-1">
                    <!-- <div class="card-header"> -->
                       <a href="product">Product</a>

                   </div>


                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection