@extends('layouts.appadmin')

@section('contain')
<section id="main-content">
    <section class="wrapper">


        {{ Form::open(array('url' => 'admin/allusers')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', "" , array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', "" , array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('profile_pic', 'profile_pic') }}
            {{ Form::file('profile_pic', array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Add User', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

        @if ($errors->all())
        <div class="alert alert-danger mt-2">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif






    </section>

</section>
@endsection