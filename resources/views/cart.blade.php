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
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
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

<div class="content">
    <div class="container py-3" style="margin-top: 80px;">
        <h1 style="font-size: 30px; margin: 15px 0px;">Carts</h1>
        <div class="row">
            <div class="container col-md-8">
                @forelse($inventory as $item)
                <div class="container d-flex align-items-start px-2 py-2">
                    <div class="card container px-2 py-2 shadow-sm">
                        <div class="row mx-4 d-flex justify-content-between">
                            <div class="col-md-3 px-2 py-2 text-center" style="border-right-color: transparent;">
                                <img src="{{ url($item->product->image) }}" class="card-img-top" alt="{{ $item->product->name }}" style="height: 180px; width: 180px;">
                            </div>
                            <div class="col-md-9 px-2 py-2 d-flex align-items-center" style="border-left-color: transparent;">
                                <div class="ps-3">
                                    <p style="font-size: 24px;">{{ $item->product->name }}</p>
                                    <p style="font-weight: bold; font-size: 18px;">IDR {{ number_format($item->total_price)
                                        }}</p>
                                    <div class="form-group">
                                        <label style="font-size: 18px; margin-bottom: 10px;">Quantity: <b>{{ $item->quantity }}</b></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                $totalPrice += $item->total_price;
                $totalCarts++;
                @endphp
                @empty
                <div class="alert alert-danger">
                    <b>No cart added.</b>
                </div>
                @endforelse
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
                                <p class="card-text">Total Price </p>
                                <p class="card-text">IDR {{ number_format($totalPrice) }}</p>
                            </div>
                            <div class="col-md-12  d-flex justify-content-between">
                                <p class="card-text">Total Discounted</p>
                                <p class="card-text">IDR 0</p>
                            </div>
                            <hr />
                            <div class="col-md-12 d-flex justify-content-between py-2 mb-1">
                                <h5 class="card-title" style="font-weight: bold;">Grand Total</h5>
                                <p class="card-text" style="font-weight: bold;">IDR {{ number_format($totalPrice) }}</p>
                            </div>
                            <a href="{{ url('/shipment/' . auth()->user()->id) }}" class="btn buy-button px-4" style="background-color: #5FE137; font-weight: bold; color: white;">Buy
                                ({{ $totalCarts }})</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>

</script>




@endsection