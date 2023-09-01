<div class="container">
    <h1>ADD PRODUCT</h1>
    {!! Form::open(['url' => 'foo/bar', 'method' => 'post']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title:', array('class' => 'control-label')) }}
        {{ Form::text('title', '', array('id'=>'title', 'class'=>'form-control', 'required')) }}
    </div><br>
    <div class="form-group">
        <label for="selectproductbrand">Product Brand</label>
        {{ Form::selectproductbrand("selectproductbrand", $merchant['paymentInfo']->selectproductbrand ?? null,["class"=>"form-control"]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('', 'Product Stock Avilable:', ['class' => 'form-check-label']) }}
        {{ Form::radio('Status', 1, true, ['class'=>'form-check-input', 'id' => 'inlineRadio1']) }}
        {{ Form::label('inlineRadio1', 'Yes', ['class' => 'form-check-label']) }}

        {{ Form::radio('Status', 2, false, ['class'=>'form-check-input', 'id' => 'inlineRadio2']) }}
        {{ Form::label('inlineRadio2', 'No', ['class' => 'form-check-label']) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('price', 'Price:', array('class' => 'control-label')) }}
        {{ Form::text('price', '', array('id'=>'price', 'class'=>'form-control', 'required')) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('quantity', 'Quantity:', array('class' => 'control-label')) }}
        {{ Form::text('quantity', '', array('id'=>'quantity', 'class'=>'form-control', 'required')) }}
    </div><br>

    <br>
    <div class="form-group">
        {{ Form::submit('Submit') }}
    </div>
    {!! Form::close() !!}
</div>