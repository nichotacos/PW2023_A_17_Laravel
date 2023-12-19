@extends('dashboard') @section('content')

<!-- Promo Modal -->
<div class="modal fade" id="promoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <button class="btn px-3" type="submit"
                            style="background-color: #5EE137; margin-left: 20px;">Apply</button>
                    </div>
                </div>
                @foreach($promo as $items)
                <div class="container my-2 px-2 d-flex align-items-center rounded" style="height: 100px;">
                    <p class="my-auto" style="font-size: 18px; padding-left: 10px; font-weight: bold;">{{ $items['name']
                        }} {{
                        $items['name'] }} {{ $items['name'] }} {{ $items['name'] }}</p>
                </div>
                @endforeach
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
        <h1 style="font-size: 30px; margin: 15px 0px;">Cart</h1>
        <div class="row">
            <div class="container col-md-8">
                @foreach($inventory as $item)
                <div class="container d-flex align-items-start px-2 py-2">
                    <div class="card container px-2 py-2">
                        <div class="row mx-4 d-flex justify-content-between">
                            <div class="col-md-3 px-2 py-2 text-center" style="border-right-color: transparent;">
                                <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['name'] }}"
                                    style="height: 180px; width: 180px;">
                            </div>
                            <div class="col-md-9 px-2 py-2 d-flex align-items-center"
                                style="border-left-color: transparent;">
                                <div class="ps-3">
                                    <p style="font-size: 24px;">{{ $item['name'] }}</p>
                                    <p style="font-weight: bold; font-size: 18px;">Rp {{ number_format($item['price'])
                                        }}</p>
                                    <div class="form-group">
                                        <label style="font-size: 18px; margin-bottom: 10px;">Quantity: </label>
                                        <div class="input-group" style="width: 42%;">
                                            <div class="input-group-btn"
                                                style="border: solid #5FE137; border-radius: 5px 0px 0px 5px;">
                                                <button id="down" class="btn btn-default" onclick=" down('1')"><span><i
                                                            class="fa-solid fa-minus"
                                                            style="font-size: 16px;"></i></span></button>
                                            </div>
                                            <input type="text" id="myNumber"
                                                class="form-control input-number text-center" value="1"
                                                style="border-top: solid #5FE137; border-bottom: solid #5FE137;" />
                                            <div class="input-group-btn"
                                                style="border: solid #5FE137; border-radius: 0px 5px 5px 0px;">
                                                <button id="up" class="btn btn-default" onclick="up('10')"><span><i
                                                            class="fa-solid fa-plus"
                                                            style="font-size: 16px;"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container col-md-4 px-2 py-2 d-flex align-items-start">
                <div class="container px-2 py-2">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-center">
                                <a type="button" class="btn btn-white d-flex align-items-center w-100"
                                    data-bs-toggle="modal" data-bs-target="#promoModal">
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
                                <p class="card-text">Rp 45,498,000</p>
                            </div>
                            <div class="col-md-12  d-flex justify-content-between">
                                <p class="card-text">Total Discounted</p>
                                <p class="card-text">Rp 0</p>
                            </div>
                            <hr />
                            <div class="col-md-12 d-flex justify-content-between py-2 mb-1">
                                <h5 class="card-title" style="font-weight: bold;">Grand Total</h5>
                                <p class="card-text" style="font-weight: bold;">Rp 45,498,000</p>
                            </div>
                            <a href="{{ url('/shipment') }}" class="btn buy-button px-4"
                                style="background-color: #5FE137; font-weight: bold; color: white;">Buy
                                (2)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function up(max) {
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
        if (document.getElementById("myNumber").value >= parseInt(max)) {
            document.getElementById("myNumber").value = max;
        }
    }
    function down(min) {
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
        if (document.getElementById("myNumber").value <= parseInt(min)) {
            document.getElementById("myNumber").value = min;
        }
    }
</script>


@endsection