@extends('layouts.appadmin')

@section('contain')
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->


        <div class="col-md-12 stats-info stats-last widget-shadow">
            <div class="stats-last-agile">
                <!-- <table class="table stats-table ">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>PRODUCT</th>
                                <th>STATUS</th>
                                <th>PROGRESS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-success">In progress</span></td>
                                <td>
                                    <h5>85% <i class="fa fa-level-up"></i></h5>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Aliquam</td>
                                <td><span class="label label-warning">New</span></td>
                                <td>
                                    <h5>35% <i class="fa fa-level-up"></i></h5>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-danger">Overdue</span></td>
                                <td>
                                    <h5 class="down">40% <i class="fa fa-level-down"></i></h5>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Aliquam</td>
                                <td><span class="label label-info">Out of stock</span></td>
                                <td>
                                    <h5>100% <i class="fa fa-level-up"></i></h5>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-success">In progress</span></td>
                                <td>
                                    <h5 class="down">10% <i class="fa fa-level-down"></i></h5>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Aliquam</td>
                                <td><span class="label label-warning">New</span></td>
                                <td>
                                    <h5>38% <i class="fa fa-level-up"></i></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                <h1>ADD PRODUCT</h1>
                {!! Form::open(['url' => 'saveproduct', 'method' => 'post']) !!}
                <div class="form-group">
                    {{ Form::label('title', 'Title:', array('class' => 'control-label')) }}
                    {{ Form::text('title', '', array('id'=>'title', 'class'=>'form-control', 'required')) }}
                </div><br>
                <div class="form-group">
                    <label for="selectproductbrand">Product Brand</label>
                    {{ Form::selectproductbrand("discription", $merchant['paymentInfo']->selectproductbrand ?? null,["class"=>"form-control"]) }}
                </div><br>
                <!-- <div class="form-group">
                    {{ Form::label('', 'Product Stock Avilable:', ['class' => 'form-check-label']) }}
                    {{ Form::radio('Status', 1, true, ['class'=>'form-check-input', 'id' => 'inlineRadio1']) }}
                    {{ Form::label('inlineRadio1', 'Yes', ['class' => 'form-check-label']) }}

                    {{ Form::radio('Status', 2, false, ['class'=>'form-check-input', 'id' => 'inlineRadio2']) }}
                    {{ Form::label('inlineRadio2', 'No', ['class' => 'form-check-label']) }}
                </div><br> -->
                <div class="form-group">
                    {{ Form::label('price', 'Price:', array('class' => 'control-label')) }}
                    {{ Form::text('procut_price', '', array('id'=>'price', 'class'=>'form-control', 'required')) }}
                </div><br>
                <div class="form-group">
                    {{ Form::label('quantity', 'Quantity:', array('class' => 'control-label')) }}
                    {{ Form::text('product_quntity', '', array('id'=>'quantity', 'class'=>'form-control', 'required')) }}
                </div><br>

                <br>
                <div class="form-group">
                    {{ Form::submit('Submit') }}
                </div>
                {!! Form::close() !!}
            </div>


        </div>
        </div>
        <div class="clearfix"> </div>
        </div>
    </section>

</section>
@endsection