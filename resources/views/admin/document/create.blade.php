@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>


<form action="/files" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <input type="file" name="file">
    <input type="submit" value="Submit">
</form>
</body>
</html>
@endsection