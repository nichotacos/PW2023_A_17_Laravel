@extends('dashboard') @section('content')

<div class="content">
    <div class="container" style="margin-top: 87px;">
        <nav class="py-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/laptops/carousel1.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/laptops/carousel2.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/laptops/carousel3.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/laptops/carousel4.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
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
                    <div class="card items" style="width: 19rem;">
                        <img src="{{ url($item['image']) }}" class="card-img-top item-img" alt="{{ $item['name'] }}" style="height: 286px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text" style="font-weight: bold;">Rp {{ number_format($item['price']) }}</p>
                            <p class="card-text">Rating: <b>{{ $item['rating'] }} ({{ $item['reviews'] }})</b></p>
                            <a href="{{ url('/products/details/' . $item['id']) }}" class="btn rounded" style="background-color: #60B347; color: white;">Details</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection