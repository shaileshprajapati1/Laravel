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
                                    <img id="product_image" src="#" width="50px" height="50px" alt="your image" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                            <button type="submit" name="saveproduct" id="saveproduct" class="btn btn-primary">ADD PRODUCT</button>
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
    $('#product_form').on("submit", function(e) {
        e.preventDefault();
        //    console.log("call");
        let formData = new FormData()
        var result = {};
        $.each($('#product_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        //  console.log(result);
      
      
     
        // formData.append('product_img', $('input[type=file]')[0].files[0]);

        console.log(formData);


        // fetch(`http://localhost:8000/api/admin/saveprodct`, {
        //     headers: {
        //         'Accept': 'application/json',
        //         'Content-Type': 'application/json'
        //     },
        //     method: "POST",
        //     body: JSON.stringify(formData)

        // }).then((res) => res.json()).then((Response) => {
        //     console.log(Response);
        // })


    })
    let imgInp = document.getElementById("product_img")
    let imgshow = document.getElementById("product_image")
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            imgshow.src = URL.createObjectURL(file)
        }
    }
    // console.log(imgInp);

    async function fetchdata(e) {
        let allprod = await fetch(`http://localhost:8000/api/admin/allproduct`)
        let allprodRes = await allprod.json();
        // console.log(allprodRes);
        let product = ""
        allprodRes.forEach(element => {
            // console.log(element.title)
            product += `<tr> 
                <td>${element.title}</td>
                <td>${element.discription}</td>
                <td>${element.procut_price}</td>
                <td>${element.product_quntity}</td>
                <td>${element.product_img}</td>
                <td>${element.id}</td>
                </tr>`



        });

        document.getElementById("showprod").innerHTML = product

    }
    fetchdata()
</script>
@endpush