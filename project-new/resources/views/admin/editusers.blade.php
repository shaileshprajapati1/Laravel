@extends('layouts.appadmin')

@section('contain')
<section id="main-content">
    <section class="wrapper">


        <h2 class="text-center">UPDATE USER FORM</h2>
        <form action="" method="post">
            @csrf
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="profile_pic" class="form-label">Profile_pic</label>
                    <input type="file" class="form-control" name="profile_pic" id="profile_pic">
                </div>
            </div><br>
            <div class="row mb-2">
                <div class="col-6 offset-5">
                    <input class="btn btn-success" type="submit" name="adduser" id="adduser" value="UPDATE USER">
                    <!-- &nbsp; <input class="btn btn-danger" type="reset" value="CANCEL"> -->
                </div>
            </div>

        </form>

    </section>

</section>
@endsection