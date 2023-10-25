@extends('dashboard') @section('content')

<div class="content">
    <div class="container py-3" style="margin-top: 100px;">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="container col-md-4" style="width: 21rem;">
                    <div class="card" style="width: 19rem; border: none;">
                        @foreach($item as $phone)
                        <img src="{{ $phone['image'] }}">
                        @endforeach
                    </div>
                </div>

                <div class="container col-md-4">
                    @foreach($item as $phone)
                    <div class="mx-2">
                        <p style="font-size: 28px; font-weight: bold; margin-bottom: 5px;">{{ $phone['name'] }}</p>
                        <div class="d-flex align-items-center">
                            <p style="font-weight: bold; color: grey; margin: 0;">Sold: {{ $phone['sold'] }}</p>
                            <i class="fa-solid fa-circle mx-2" style="font-size: 5px; color: grey;"></i>
                            <p style="font-weight: bold; color: grey; margin: 0;">Rating: {{ $phone['rating'] }}</p>
                        </div>
                        <p class="my-3" style="font-weight: bold; font-size: 28px;">IDR {{
                            number_format($phone['price']) }}
                        </p>
                    </div>
                    @endforeach

                    <div class="mx-2">
                        <p style="font-weight: bold; font-size: 20px; margin-left: 0px;">Product Details</p>
                        <div>
                            <p style="font-weight: bold; font-size: 20px; margin-left: 0px;">Storage</p>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                                <label class="btn btn-outline-success" for="btnradio1">256 GB | 8 GB</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-success" for="btnradio2">512 GB | 12 GB</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-success" for="btnradio3">1 TB | 12 GB</label>
                            </div>
                        </div>

                        <p class="pt-3" style="font-weight: bold; font-size: 20px; margin-left: 0px;">Color : Green</p>

                        <p style="font-weight: bold; font-size: 20px; margin-left: 0px;">Details: </p>
                        <div class="text-justify">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at urna nec ligula
                                fermentum eleifend. Sed augue
                                nulla, congue nec nibh at, tempor condimentum orci. Vestibulum sollicitudin tincidunt
                                enim eu egestas. Phasellus gravida
                                justo ac orci rhoncus, non aliquam nulla fringilla. Phasellus molestie justo venenatis,
                                ultricies lorem at, dapibus
                                elit. Suspendisse sit amet quam massa. Morbi a luctus urna, quis malesuada justo.
                                Aliquam id rhoncus odio, nec commodo
                                augue. Ut fringilla, odio at ullamcorper viverra, orci velit molestie mi, quis imperdiet
                                lorem nunc in nisi.</p>
                        </div>
                    </div>
                </div>
                <div class="container col-md-8 col-lg-4">
                    <div class="card w-100">
                        <p class="pt-3 px-3 mb-0" style="font-size: 24px; font-weight: bold;">Set quantity</p>
                        <div class="container">
                            <hr />
                        </div>
                        <div class="row d-flex justify-content-between mx-2 my-1">
                            <div class="col-4 d-flex align-items-center">
                                <p class="text-muted">Subtotal</p>
                            </div>
                            <div class="col-8 d-flex align-items-center justify-content-end">
                                @foreach($item as $phone)
                                <p style="font-weight: bold; font-size: 24px;">IDR {{
                                    number_format($phone['price']) }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="container col-md-9 d-flex justify-content-center mb-2">
                            <button class="btn py-2"
                                style="font-weight: bold; font-size: 18px; background-color: #5FE137; width: 100%;"
                                id="cartBtn">+
                                Add
                                to
                                Cart</button>
                        </div>

                        <div class="container col-md-9 d-flex justify-content-center mt-2">
                            <button class="btn btn-danger py-2 "
                                style="font-weight: bold; font-size: 18px; width: 100%;" id="wishBtn"><i
                                    class="fa-solid fa-heart me-2" style="font-size: 16px;"></i>Add
                                to
                                Wishlist</button>
                        </div>

                        <div class="form-group mx-4 my-4" style="width: 42%;">
                            <label style="font-size: 20px; margin-bottom: 10px; font-weight: bold;">Quantity: </label>
                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-btn"
                                    style="border: solid #5FE137; border-radius: 5px 0px 0px 5px;">
                                    <button id="down" class="btn btn-default" onclick=" down('1')"><span><i
                                                class="fa-solid fa-minus" style="font-size: 16px;"></i></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number text-center" value="1"
                                    style="border-top: solid #5FE137; border-bottom: solid #5FE137;" />
                                <div class="input-group-btn"
                                    style="border: solid #5FE137; border-radius: 0px 5px 5px 0px;">
                                    <button id="up" class="btn btn-default" onclick="up('9')"><span><i
                                                class="fa-solid fa-plus" style="font-size: 16px;"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p style="font-weight: bold; font-size: 28px; margin-left: 0px;">Reviews: </p>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="container d-flex align-items-center">
                            <i class="fa-solid fa-star me-3 mb-3" style="font-size: 32px; color: gold;"></i>
                            <p style="font-size: 54px;">4.8</p>
                            <p class="text-muted" style="font-size: 20px;">/5.0</p>
                        </div>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center">
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <p style="font-size: 16px;">5</p>
                            </div>
                            <div class="col-10">
                                <div class="progress my-2" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 96%; background-color: #5FE137;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center">
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <p style="font-size: 16px;">4</p>
                            </div>
                            <div class="col-10">
                                <div class="progress my-2" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 12%; background-color: #5FE137;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center">
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <p style="font-size: 16px;">3</p>
                            </div>
                            <div class="col-10">
                                <div class="progress my-2" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 2%; background-color: #5FE137;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center">
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <p style="font-size: 16px;">2</p>
                            </div>
                            <div class="col-10">
                                <div class="progress my-2" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 0%; background-color: #5FE137;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center">
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <p style="font-size: 16px;">1</p>
                            </div>
                            <div class="col-10">
                                <div class="progress my-2" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 1%; background-color: #5FE137;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        @foreach($review as $item)
                        <div class="card my-2"
                            style="border-left: none; border-right: none; border-top: none; border-radius: 0px;">
                            <div class="d-flex align-items-start my-2 mx-2">
                                <i class="fa-solid fa-user me-2"></i>
                                <p style="font-size: 18px; font-weight: bold;">{{ $item['username'] }}</p>
                            </div>

                            <div class="d-flex align-items-start mx-2">
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                                <i class="fa-solid fa-star me-1 mb-3" style="font-size: 14px; color: gold;"></i>
                            </div>
                            <p class="mx-2" style="font-size: 16px;">{{ $item['reviews'] }}</p>
                            <div class="col-lg-12 d-flex justify-content-end mb-3">
                                <button class="btn btn-success px-3"><i
                                        class="fa-solid fa-thumbs-up me-3"></i>Helpful</button>
                            </div>

                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="cartToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto text-success">Success</strong>
            <small>Now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Success adding item to cart.
        </div>
    </div>
</div>

<!-- Wish Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="wishToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto text-success">Success</strong>
            <small>Now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Success adding item to wishlist.
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

<script>
    const toastTriggerCart = document.getElementById('cartBtn')
    const toastLiveExampleCart = document.getElementById('cartToast')

    if (toastTriggerCart) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExampleCart)
        toastTriggerCart.addEventListener('click', () => {
            console.log('Clicked the cart button');
            toastBootstrap.show()
        })
    }
</script>

<script>
    const toastTriggerWish = document.getElementById('wishBtn')
    const toastLiveExampleWish = document.getElementById('wishToast')

    if (toastTriggerWish) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExampleWish)
        toastTriggerWish.addEventListener('click', () => {
            toastBootstrap.show()
        })
    }
</script>

@endsection