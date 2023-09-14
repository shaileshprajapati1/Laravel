@extends('layouts.appadmin')

@section('contain')
<section id="main-content">
    <section class="wrapper">
      

        <form action="/updateuser/{{Auth::user()->id}}" method="post">
            @csrf
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" value=" {{ Auth::user()->name }}" name="name" id="name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value=" {{ Auth::user()->email }}" email="email" id="email">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="profile_pic" class="form-label">Profile_pic</label>
                    <image style="width:50px;" src="{{ ('/uploads/'.Auth::user()->profile_pic) }}"/>
                    <input type="file" class="form-control" value="{{ Auth::user()->profile_pic }}" name="profile_pic" id="profile_pic">
                </div>
            </div>
            <div class="row mb-5"><br>
                <div class="col-6 offset-3">
                <input type="submit" name="update" value="Update" class="btn btn-success" >
                </div>
            </div>



        </form>




    </section>

</section>
@endsection