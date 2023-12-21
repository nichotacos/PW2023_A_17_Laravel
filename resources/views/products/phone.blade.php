@extends('dashboard') @section('content')

<div class="content">
    <div class="container" style="margin-top: 87px;">
        <nav class="py-3" aria-label="breadcrumb" style="margin-bottom: 0px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <video style="width: 100%;" autoplay muted loop>
                        <source src="{{ asset('images/phones/carousel1.mp4') }}" type="video/mp4">
                    </video>
                    <div class="carousel-ban-text-adj">
                        <div>
                            <p style="font-size: 50px; font-weight: bold; color: black;">Galaxy Z Flip 5</p>
                            <p class="my-3" style="color: black;">Get <b>free accessories, overtrade
                                    bonus</b><sup>¤</sup> <br />and
                                more <b>(worth up to
                                    $638)</b>!<sup>~</sup> </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/phones/carousel2.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                    <div class="carousel-ban-text-adj">
                        <div>
                            <div>
                                <p style="font-size: 50px; font-weight: bold; color: black;">Galaxy A Series</p>
                                <p class="my-3" style="color: black;">Awesome is for everyone </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3800">
                    <video style="width: 100%;" autoplay muted loop>
                        <source src="{{ asset('images/phones/carousel3.mp4') }}" type="video/mp4">
                    </video>
                    <div class="carousel-ban-text-adj">
                        <div>
                            <p style="font-size: 50px; font-weight: bold; color: white;">Galaxy S</p>
                            <p class="my-3" style="color: white;">Share the Epic</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/phones/carousel4.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                    <div class="carousel-ban-text-adj">
                        <div>
                            <p style="font-size: 50px; font-weight: bold; color: black;">Galaxy Z Fold 5</p>
                            <p class="my-3" style="color: black;">Get <b>free accessories, overtrade
                                    bonus</b><sup>¤</sup> <br />and
                                more <b>(worth up to
                                    $638)</b>!<sup>~</sup> </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h1 class="py-4">Products</h1>

        <div class="container">
            <div class="row d-flex justify-content-start">
                @foreach($products as $item)
                <div class="col-md-3 d-flex justify-content-center py-3">
                    <a class="to-details" href="{{ url('/products/details/' . $item['id']) }}">
                        <div class="card items" style="width: 19rem;">
                            <img src="{{ $item['image'] }}" class="card-img-top item-img" alt="{{ $item['name'] }}" style="height: 286px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                                <p class="card-text" style="font-weight: bold;">Rp {{ number_format($item['price']) }}
                                </p>
                                <p class="card-text mb-3">Rating: <b>{{ $item['rating'] }} ({{ $item['reviews'] }})</b></p>
                                <a href="{{ url('/products/details/' . $item['id']) }}" class="btn rounded" style="background-color: #60B347; color: white;">Details</a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection