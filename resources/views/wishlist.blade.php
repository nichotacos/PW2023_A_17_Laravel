@extends('dashboard') @section('content')

<div class="content">
    <div class="container py-3" style="margin-top: 80px;">
        <h1 style="font-size: 30px; margin: 15px 0px;">Wishlists</h1>
        <div class="row">
            <div class="container">
                <div class="row d-flex justify-content-start">
                @foreach($inventory as $item)
                <div class="col-md-3 d-flex justify-content-center py-3">
                    <div class="card items" style="width: 19rem;">
                    <a href="{{ url('/details') }}"><img src="{{ $item['image'] }}" class="card-img-top item-img" alt="{{ $item['name'] }}"
                            style="height: 286px;"></a>
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text" style="font-weight: bold;">IDR {{ number_format($item['price']) }}</p>
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <a href="#" class="btn btn-danger rounded w-100" style="color: white;"><i class="fa-solid fa-trash" style="font-size: 14px;"></i></a>
                                </div>
                                <div class="col-lg-9 col-sm-12 col-12 text-end">
                                    <a href="#" class="btn rounded w-100" style="background-color: #60B347; color: white; font-weight: bold;">+ Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            </div>
        </div>

    </div>
</div>


@endsection