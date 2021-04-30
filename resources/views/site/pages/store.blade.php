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
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Album Catagory Area Start ##### -->
<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                    <a href="#" data-filter="*">Browse All</a>
                    <a href="#" data-filter=".a" class="active">A</a>
                    <a href="#" data-filter=".b">B</a>
                    <a href="#" data-filter=".c">C</a>
                    <a href="#" data-filter=".d">D</a>
                    <a href="#" data-filter=".e">E</a>
                    <a href="#" data-filter=".f">F</a>
                    <a href="#" data-filter=".g">G</a>
                    <a href="#" data-filter=".h">H</a>
                    <a href="#" data-filter=".i">I</a>
                    <a href="#" data-filter=".j">J</a>
                    <a href="#" data-filter=".k">K</a>
                    <a href="#" data-filter=".l">L</a>
                    <a href="#" data-filter=".m">M</a>
                    <a href="#" data-filter=".n">N</a>
                    <a href="#" data-filter=".o">O</a>
                    <a href="#" data-filter=".p">P</a>
                    <a href="#" data-filter=".q">Q</a>
                    <a href="#" data-filter=".r">R</a>
                    <a href="#" data-filter=".s">S</a>
                    <a href="#" data-filter=".t">T</a>
                    <a href="#" data-filter=".u">U</a>
                    <a href="#" data-filter=".v">V</a>
                    <a href="#" data-filter=".w">W</a>
                    <a href="#" data-filter=".x">X</a>
                    <a href="#" data-filter=".y">Y</a>
                    <a href="#" data-filter=".z">Z</a>
                    <a href="#" data-filter=".number">0-9</a>
                </div>
            </div>
        </div>

<!-- ##### Buy Now Area Start ##### -->
<section>
<div class="oneMusic-buy-now-area mb-100">
    <div class="container">
        <div class="row">
        @foreach($products as $product)
            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="single-album-area">
                    <div class="album-thumb">
                        <img src="{{ asset('images/bg-img/b1.jpg')}}" alt="">
                        <!-- Album Price -->
                        <div class="album-price">
                            <p> <!-- We format the number to a price with currency behind it -->
                                {{ number_format($product->price, 2) }} USD</p>
                                <a href="{{ route('add', [ $product->getRouteKey() ]) }}">
                                <!-- The button for adding the product to the cart -->
                                <button class="btn btn-primary">Add to cart</button>
                        </div>
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                        </div>
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5> {{ $product->name }}</h5>
                        </a>
                        <p>Radio Station</p>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

        <div class="row">
            <div class="col-12">
                <div class="load-more-btn text-center">
                    <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- ##### Buy Now Area End ##### -->
