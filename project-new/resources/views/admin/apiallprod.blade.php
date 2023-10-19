@extends('layouts.appadmin')

@section('contain')

<section id="main-content">
    <section class="wrapper">
        <!-- //market-->

        <div class="col-md-12 stats-info stats-last widget-shadow">
            <div class="stats-last-agile">

                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Add Product
                </button>
                <table class="table stats-table ">
                    <thead>
                        <tr>
                            <th>Sr no</th>
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

            </div>
        </div>






        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="product_form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Product Form</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="title" class="form-lable">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="discription" class="form-lable">Discription</label>
                                    <input type="text" name="discription" id="discription" class="form-control">

                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="procut_price" class="form-lable">Prodcut_Price</label>
                                    <input type="tel" name="procut_price" id="procut_price" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="product_quntity" class="form-lable">Product_Quntity</label>
                                    <input type="tel" name="product_quntity" id="product_quntity" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="product_img" class="form-lable">Product_Img</label>
                                    <input type="file" name="product_img" id="product_img" class="form-control">
                                    <img id="product_image" src="#" width="100px" height="100px" alt="your image" />
                                    <input type="hidden" name="image" id="image">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <button type="button" onclick="SaveFile()" id="uploaded_image" class="btn btn-success">Upload Image</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                            <input type="submit" id="saveproduct" class="btn btn-primary" value="saveproduct">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

</section>

@endsection
@push('api')
<script>
    async function updateproduct(id) {
        $("#updateproductform").on("submit", function(event) {
            event.preventDefault();
            // console.log(id);
            var result = {};
            $.each($('#updateproductform').serializeArray(), function() {
                result[this.name] = this.value;
            });
            // console.log(result);
            fetch(`http://localhost:8000/api/admin/updateproduct/${id}`, {
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            method: "PUT",
            body: JSON.stringify(result)
            }).then((res) => res.json()).then((responce) => {
                console.log(responce);
            })


        })

    }
    async function editproduct(id) {
        // console.log("call");
        let viewprod = await fetch(`http://localhost:8000/api/admin/editproduct/${id}`)
        let viewprodRes = await viewprod.json();
        // console.log(viewprodRes);
        document.getElementById("title").value = viewprodRes.title;
        document.getElementById("discription").value = viewprodRes.discription;
        document.getElementById("procut_price").value = viewprodRes.procut_price;
        document.getElementById("product_quntity").value = viewprodRes.product_quntity;
        document.getElementById("product_quntity").value = viewprodRes.product_quntity;
        // console.log(document.getElementById("product_img").value);

        let imgInp = document.getElementById("product_img").file = viewprodRes.product_img;
        // console.log(imgInp);
        let blah = document.getElementById("product_image")
        blah.src = "/uploads/" + imgInp

        document.getElementById('saveproduct').setAttribute('onclick', `updateproduct(${viewprodRes.id})`);
        document.getElementById('saveproduct').value = "Updateproduct";
        document.getElementById('product_form').id = "updateproductform";


    }

    async function fetchdata(e) {
        let allprod = await fetch(`http://localhost:8000/api/admin/allproduct`)
        let allprodRes = await allprod.json();
        // console.log(allprodRes);
        let product = ""
        let srno = 1
        allprodRes.forEach(element => {
            // console.log(element.title)
            product += `<tr> 
                <td>${srno}</td>
                <td>${element.title}</td>
                <td>${element.discription}</td>
                <td>${element.procut_price}</td>
                <td>${element.product_quntity}</td>
                
                <td>
                <img src="/uploads/${element.product_img}" width="50px" alt=""></td>
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="editproduct(${element.id})">
                Edit
                </button>
               
                
                <button onclick="deleteproduct(${element.id})" class="btn btn-danger">Delete</button>
                </td>
                
                </tr>`
            srno++

        });

        document.getElementById("showprod").innerHTML = product
    }
    fetchdata()

    $("#product_form").on("submit", function(event) {
        event.preventDefault();

        var result = {};
        $.each($('#product_form').serializeArray(), function() {
            result[this.name] = this.value;
        });


        fetch(`http://localhost:8000/api/admin/saveproduct`, {
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            method: "POST",
            body: JSON.stringify(result)
        }).then((res) => res.json()).then((Response) => {
            fetchdata();

        })
    })


    let imgInp = document.getElementById("product_img")
    let blah = document.getElementById("product_image")

    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }


    function SaveFile() {
        const form_data = new FormData();
        form_data.append('product_img', $("#product_img")[0].files[0]);
        // console.log($("#product_img")[0].files[0]);
        fetch("http://localhost:8000/api/admin/uploadimage", {
            headers: {
                // 'Accept': 'application/json',
                // 'Content-Type': 'application/json'
                _token: "{{ csrf_token() }}"
            },
            method: "POST",
            body: form_data
        }).then(function(response) {
            return response.json();
        }).then(function(responseData) {
            // console.log(responseData);
            document.getElementById('uploaded_image').innerHTML = '<div class="alert alert-success">Image Uploaded Successfully</div> ';
            document.getElementById("image").value = responseData

        });
    }
</script>
@endpush