@extends('site.app')
@section('title', 'BASSIST | Innocent Harerimana')
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="background-attachment" style="background-image:  url({{ asset('images/bg-img/Innocent-1.jpg') }}); background-size:cover; background-position: center center;background-attachment:fixed;">
    <div class="single-hero-slide d-flex align-items-center justify-content-center">
        <div class="container">
        
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-warning" uk-alert>
                {{ Session::get('error') }}
                @php
                    Session::forget('error');
                @endphp
            </div>
        @endif

        <div class="col-12">
            <div class="hero-slides-content text-center">
                <h2 data-animation="" data-delay="">Innocent Harerimana <span>Innocent Harerimana</span></h2>
                <h6 data-animation="" data-delay="">Bassist/Educator/Composer</h6>
                <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                <div class="row">
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->


<!-- ##### Featured Artist Area Start ##### -->
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url({{ asset('images/bg-img/in-4.jpg') }});">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="{{ asset('images/bg-img/in-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>See what’s new</p>
                        <a href="Store.html"><h2>Buy What’s New</h2></a>
                    </div>
                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>01. Main Hit Song</p>
                        </div>
                        <audio preload="auto" controls>
                            <source src="{{ asset('audio/dummy-audio.mp3')}}">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Artist Area End ##### -->

<!-- ##### Buy Now Area Start ##### -->
<section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Latest Tutorials</p>
                    <h2>Buy What’s New</h2>
                </div>
            </div>
        </div>

    

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
        @foreach($products as $product)
            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                    <div class="album-thumb">
                      <img src="{{ $product->thumbnail }}" alt="">
                        <!-- Album Price -->
                        <div class="album-price">
                            <p> <!-- We format the number to a price with currency behind it -->
                                {{ number_format($product->price, 2) }} USD</p>
                                <a href="{{ route('add', [ $product->getRouteKey() ]) }}">
                                <!-- The button for adding the product to the cart -->
                                <button class="btn btn-primary">Add to cart</button>
                            </a>
                        </div>
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <a href="videos/{{ $product->video }}" class="video--play--btn"><span class="icon-play-button"></span></a>
                        </div>
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>{{ $product->name }}</h5>
                        </a>
                        <p>Radio Station</p>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
       
        <div class="row">
            <div class="col-12">
                <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                    <a href="Store.html" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- ##### Buy Now Area End ##### -->

<!-- ##### Miscellaneous Area End ##### -->
