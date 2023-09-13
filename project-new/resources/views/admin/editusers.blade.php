@extends('layouts.appadmin')

@section('contain')
<section id="main-content">
    <section class="wrapper">

        {{ Form::open(array('url' => 'admin/allusers/'.$alldata->id,'enctype' => 'multipart/form-data','method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', "$alldata->name" , array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', "$alldata->email" , array('class' => 'form-control')) }}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('password', 'password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div> -->
        <div class="form-group">
            {{ Form::label('profile_pic', 'profile_pic') }}
            <image style="width:50px;" src="{{ ('/uploads/'.$alldata->profile_pic) }}"/>
            {{ Form::file('profile_pic', array('class' => 'form-control')) }}
            <!-- {{ Form::hidden('profile_pic', "$alldata->profile_pic" , array('class' => 'form-control')) }} -->
            <!-- {{ Form::text('old_prof_pic', "$alldata->profile_pic" , array('class' => 'form-control')) }} -->
        </div>


        {{ Form::submit('Update User', array('class' => 'btn btn-primary')) }}

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