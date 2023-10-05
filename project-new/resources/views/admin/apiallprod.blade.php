@extends('layouts.appadmin')

@section('contain')
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->

            <div class="col-md-12 stats-info stats-last widget-shadow">
                <div class="stats-last-agile">
                    {{-- <a class="btn btn-success" href="{{ URL::to('admin/allusers/create') }}">Add User</a> --}}
                    <table class="table stats-table ">
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
                        <tbody id="showprod">

                        </tbody>
                    </table>
        </section>

    </section>
@endsection
@push('api')
    <script>
        async function fetchdata(e) {
            let allprod = await fetch(`http://localhost:8000/api/admin/allproduct`)
            let allprodRes = await allprod.json();
            console.log(allprodRes);
            let product = ""
            allprodRes.forEach(element => {
                // console.log(element.title)
                product += `<tr> <td>${element.title}</td></tr>`


            });
            document.getElementById("showprod").innerhtml = product

        }
        fetchdata()
    </script>
@endpush
