@extends('dashboard') @section('content')

@php
$totalPrice = 0.0;
$totalCarts = 0;
@endphp

<!-- Promo Modal -->
<div class="modal fade" id="promoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Apply Promo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-floating mb-3 d-flex align-items-center ">
                        <input type="text" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Voucher Code</label>
                        <button class="btn px-3" type="submit" style="background-color: #5EE137; margin-left: 20px;">Apply</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- Payment -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Payment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1 class="modal-title fs-5 mb-3" id="exampleModalLabel">Payment Method</h1>
                <div class="form-check my-3 d-flex align-items-center me-3">
                    <label class="form-check-label d-flex align-items-center me-3 w-100 col-lg-10" for="flexRadioDefault1">
                        <div class="col-lg-3">
                            <img src="https://images.tokopedia.net/img/toppay/sprites/bca.png" style="width: 80%;">
                        </div>
                        <div class="col-lg-9">
                            <p class="ms-2 d-flex align-items-center my-auto" style="font-size: 18px; font-weight: bold;">BCA
                                Virtual Account</p>
                        </div>

                    </label>
                    <input class="form-check-input me-3 col-lg-1 text-start" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                </div>
                <div class="form-check my-3 d-flex align-items-center me-3">
                    <label class="form-check-label d-flex align-items-center me-3 w-100 col-lg-10" for="flexRadioDefault2">
                        <div class="col-lg-3">
                            <img src="https://images.tokopedia.net/img/toppay/logo-mandiri.png" style="width: 80%;">
                        </div>
                        <div class="col-lg-9">
                            <p class="ms-2 d-flex align-items-center my-auto" style="font-size: 18px; font-weight: bold;">
                                Mandiri
                                Virtual Account</p>
                        </div>
                    </label>
                    <input class="form-check-input me-3 col-lg-1 text-start" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-target="#confirmModal" data-bs-toggle="modal" style="background-color: #5FE137; color: white; font-weight: bold;">Pay</button>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Payment -->
<div class="modal fade" id="confirmModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Payment Success!</h1>
                <a type="button" class="btn-close" href="{{ url('/') }}"></a>
            </div>
            <div class="modal-body">
                Sit tight and wait your item while being shipped!
            </div>
            <div class="modal-footer">
                <a type="button" class="btn" href="{{ url('/') }}" style="background-color: #5FE137; color: white; font-weight: bold;">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container py-3" style="margin-top: 80px;">
        <h1 style="font-size: 30px; margin: 15px 0px;">Shipment</h1>
        <div class="row">
            <div class="container col-md-8">
                <p class="mt-3" style="font-weight: bold; font-size: 20px;">Shipping Address</p>
                <hr>
                <p class="my-1" style="font-weight: bold;">{{ Auth::user()->full_name }}</p>
                <p class="my-1">{{ Auth::user()->telephone }}</p>
                <p class="my-1 text-muted">{{ Auth::user()->address == NULL ? "No Address Set" : Auth::user()->address }}</p>
                <hr>
                <div class="row">
                    <div class="col-lg-8">
                        @foreach($inventory as $item)
                        <div class="container d-flex align-items-start px-2 py-2">
                            <div class="card container px-2 py-2">
                                <div class="row mx-4 d-flex justify-content-between">
                                    <div class="col-md-3 px-2 py-2 text-center" style="border-right-color: transparent;">
                                        <img src="{{ url($item->product->image) }}" class="card-img-top" alt="{{ $item->product->name }}" style="height: 120px; width: 120px;">
                                    </div>
                                    <div class="col-md-9 px-2 py-2 d-flex align-items-center" style="border-left-color: transparent;">
                                        <div class="ps-3">
                                            <p style="font-size: 24px;">{{ $item->product->name }}</p>
                                            <p style="font-weight: bold; font-size: 18px;">IDR {{
                                                number_format($item->total_price)
                                                }}</p>
                                            <p style="font-size: 18px; margin-bottom: 10px;">Quantity: <b>{{ $item->quantity }}</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $totalPrice += $item->total_price;
                        $totalCarts++;
                        @endphp
                        @endforeach
                    </div>
                    <!-- <div class="col-lg-3">
                        <p>Choose Duration</p>
                        <div class="dropdown" id="shipment-dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shipment
                            </button>
                            <ul class="dropdown-menu ship" id="shipment-dropdown">
                                <li><a class="dropdown-item" href="#">Reguler</a></li>
                                <li><a class="dropdown-item" href="#">Express</a></li>
                                <li><a class="dropdown-item" href="#">Cargo</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>

            </div>
            <div class="container col-md-4 px-2 py-2 d-flex align-items-start">
                <div class="container px-2 py-2">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-center">
                                <a type="button" class="btn btn-white d-flex align-items-center w-100" data-bs-toggle="modal" data-bs-target="#promoModal">
                                    <div class="d-flex align-items-center w-100">
                                        <i class="fa-solid fa-tags me-3"></i>
                                        Makin hemat pakai promo
                                        <i class="fa-solid fa-angle-right justify-content-end mx-3"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title py-2 mb-3" style="font-weight: bold;">Shopping Summary</h5>
                            <div class="col-md-12 d-flex justify-content-between">
                                <p class="card-text my-1">Total Price IDR </p>
                                <p class="card-text my-1">IDR {{ number_format($totalPrice) }}</p>
                            </div>
                            <div class="col-md-12  d-flex justify-content-between">
                                <p class="card-text my-1">Total Shipping Fee</p>
                                <p class="card-text my-1">IDR 25.000</p>
                            </div>
                            <div class="col-md-12  d-flex justify-content-between">
                                <p class="card-text my-1">Admin Fee</p>
                                <p class="card-text my-1">IDR 1,000</p>
                            </div>
                            <hr />
                            <div class="col-md-12 d-flex justify-content-between py-2 mb-1">
                                <h5 class="card-title" style="font-weight: bold;">Grand Total</h5>
                                @php
                                $totalPrice += 26000
                                @endphp
                                <h5 class="card-title" style="font-weight: bold;">IDR {{ number_format($totalPrice) }}</h5>
                            </div>
                            <a href="{{ url('/shipment') }}" class="btn buy-button px-4" type="button" data-bs-toggle="modal" data-bs-target="#paymentModal" style="background-color: #5FE137; font-weight: bold; color: white; width: 100%;">Select
                                Payment
                                Method</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection