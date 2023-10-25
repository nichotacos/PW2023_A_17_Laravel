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
                <div class="carousel-item active">
                    <img src="{{ asset('images/tvs/carousel1.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                    <div class="carousel-ban-text-adj-tv">
                        <div>
                            <div>
                                <p style="font-size: 50px; font-weight: bold; color: white;">Neo OLED 4K</p>
                                <p class="my-3" style="color: white;">More Wow than ever in 4K</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/tvs/carousel2.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                    <div class="carousel-ban-text-adj-tv">
                        <div>
                            <div>
                                <p style="font-size: 50px; font-weight: bold; color: black;">Bright and colorful, OLED 4K</p>
                                <p class="my-3" style="color: black;">Experience the Wow difference of Samsung OLED </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/tvs/carousel3.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                    <div class="carousel-ban-text-adj-tv d-flex flex-row-reverse" style="margin-left: 240px;">
                        <div>
                            <div>
                                <p style="font-size: 50px; font-weight: bold; color: black;">Crystal UHD 4K TV</p>
                                <p class="my-3" style="color: black;">The best-in-class, crystal clear choice </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/tvs/carousel4.png') }}" class="d-block w-100 object-fit-fill" alt="test image">
                    <div class="carousel-ban-text-adj-tv">
                        <div>
                            <div>
                                <p style="font-size: 50px; font-weight: bold; color: white;">QLED TV</p>
                                <p class="my-3" style="color: white;">Everlasting brilliance, colorful possibilities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
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
                        <img src="{{ $item['image'] }}" class="card-img-top item-img" alt="{{ $item['name'] }}"
                            style="height: 286px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text" style="font-weight: bold;">Rp {{ number_format($item['price']) }}</p>
                            <p class="card-text">Stock: <b>{{ ($item['stock'] )}}</b></p>
                            <!-- <i data-star="{{ $item['rating'] }}"></i> -->
                            <a href="#" class="btn rounded" style="background-color: #60B347; color: white;">Plis
                                beli</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection