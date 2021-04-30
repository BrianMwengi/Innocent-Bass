@extends('admin.app')
@section('title', 'BASSIST | Innocent Harerimana')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product - create</div>

                    <div class="card-body">

                    {!! Form::open(['route' => 'products.store', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            {!! Form::label('Thumbnail') !!}
                            {!! Form::text('thumbnail', null, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                    <div class="form-group @if($errors->has('name')) has-error @endif">
                            {!! Form::label('Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('price')) has-error @endif">
                            {!! Form::label('price') !!}
                            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Product price']) !!}
                            @if ($errors->has('price'))
                                <span class="help-block">{!! $errors->first('price') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('video')) has-error @endif">
                            {!! Form::label('video', null, ['style' => 'display: block;']) !!}
                            {!! Form::file('video', ['single' => 'single']) !!}
                            @if ($errors->has('video'))
                            <span class="help-block">{!! $errors->first('video') !!}</span>@endif
                        </div>

                             
                        {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
             </div>
        </div>
    </div>
 @endsection 

