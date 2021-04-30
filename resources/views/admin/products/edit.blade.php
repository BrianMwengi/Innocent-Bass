@extends('admin.app')
@section('title', 'BASSIST | Innocent Harerimana')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product - edit</div>

                    <div class="card-body">
                    {!! Form::open(['route' => ['products.update', $product->id],'method' => 'put']) !!}
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            {!! Form::label('Thumbnail') !!}
                            {!! Form::text('thumbnail', $product->thumbnail, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                    <div class="form-group @if($errors->has('name')) has-error @endif">
                            {!! Form::label('Name') !!}
                            {!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('price')) has-error @endif">
                            {!! Form::label('price') !!}
                            {!! Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Product Price']) !!}
                            @if ($errors->has('price'))
                                <span class="help-block">{!! $errors->first('price') !!}</span>@endif
                        </div>

                        {!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}
             </div>
        </div>
    </div>
 @endsection 

 @section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection

