@extends('site.app')
@section('title', 'BASSIST | Innocent Harerimana')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{ asset ('images/bg-img/breadcumb3.jpg') }});">
    <div class="bradcumbContent">
        <p>Latest Single</p>
        <h2>New Release</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Add Area Start ##### -->

<section class="section-padding-100-0">
<div class="add-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="adds">
                    <a href="https://www.youtube.com/watch?v=MU6M2jTNj2w" target="_blank"><img src="{{ asset('images/bg-img/music.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Add Area End ##### -->
</section>
@stop