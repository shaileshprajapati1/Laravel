@extends('layouts.appadmin')

@section('contain')

<section id="main-content">
    <section class="wrapper">
        <!-- //market-->

        <!-- {{ $alluser }} -->
        <div class="col-md-12 stats-info stats-last widget-shadow">
            <div class="stats-last-agile">
                <table class="table stats-table ">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PROFILE_PIC</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        @foreach($alluser as $user) <?php $i++ ?>
                        <tr>

                            <th scope="row">{{ $i }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->profile_pic }}</td>
                            <td>
                                @if($user->roll_id == 2)

                                <a class="label label-success" href="edit/{{ $user->id }}">Edit</a>   
                                <a class="label label-danger" href="delete/{{ $user->id }}">Delete</a>   
                                @endif
                               
                           
                            
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
    </section>

</section>

@endsection