@extends('site.app')
@section('title', 'BASSIST | Innocent Harerimana')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('images/bg-img/breadcumb3.jpg')}});">
    <div class="bradcumbContent">
        <p>Latest Tutorials</p>
        <h2>Store Collection</h2>
    </div>
</section>
<h1>Select your download:</h1>

<table class="table table-bordered">
<a href="/admin/files/create">Upload File</a>
</table>

@stop