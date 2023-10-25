@extends('dashboard') @section('content')

<div class="content">
    <div class="container-fluid" style="margin-top: 87px;">
        <!-- Caroussel -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/laptops/carousel1.png') }}" class="d-block w-100 object-fit-fill"
                        alt="test image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/laptops/carousel2.png') }}" class="d-block w-100 object-fit-fill"
                        alt="test image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/phones/carousel2.png') }}" class="d-block w-100 object-fit-fill"
                        alt="test image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/laptops/carousel4.png') }}" class="d-block w-100 object-fit-fill"
                        alt="test image">
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

        <!-- Top Categories -->
        <section class="py-5">
            <h1 style="text-align: center; margin-top: 80px;">Top Categories</h1>
            <div class="container">
                <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5 mb-3 text-center d-flex justify-content-center"
                    style="margin-top: 60px; margin-bottom: 60px;">
                    @foreach ($items as $top)
                    <div class="col-lg-2">
                        <div class="card mb-4 rounded-3 shadow-sm" style="width: 250px;">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">{{ $top['name'] }}</h4>
                            </div>
                            <div class="card-body">
                                <img src="{{ $top['image'] }}" style="height: 120px; width: 120px;">
                                <a type="button" class="w-80 btn btn-lg btn-outline-primary"
                                    href="{{ url('/' . $top['ref']) }}">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Membership -->
        <section class="py-5">
            <div class="container rounded"
                style="margin-top: 100px; height: 640px; background-image: url('https://images.samsung.com/is/image/samsung/assets/id/homepage/main-homepage/2023/web-shop-app.jpg');">
                <div class="container d-flex align-items-center" style="height: inherit;">
                    <div class="row mx-5">
                        <div class="col-md-7">
                            <p style="color: white; font-size: 45px; font-weight: bold;">Subscribe To Our Email And Get
                                25%
                                Off</p>
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="email" class="form-control py-2" id="exampleFormControlInput1"
                                        placeholder="Enter Email Address" required>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary mb-3 py-2 px-3">Subscribe</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shipping -->
        <section class="py-5">
            <div class="container" style="margin-top: 100px;">
                <div class="row text-center">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded" width="110" height="110"
                            src="https://assets.website-files.com/644e3dd8d74e611a900b6b4c/6458b6182cb0bb3c19973a80_car.svg"
                            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"
                            style="margin-bottom: 20px;">
                        <h2 class="fw-normal">Free Standard Delivery</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel.
                            This is
                            the
                            first
                            column.</p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded" width="110" height="110"
                            src="https://assets.website-files.com/644e3dd8d74e611a900b6b4c/6458b618aa291004f9e74b27_safe-payment.svg"
                            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"
                            style="margin-bottom: 20px;">
                        <h2 class="fw-normal">Safe Payment</h2>
                        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                            second
                            column.
                        </p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded" width="110" height="110"
                            src="https://assets.website-files.com/644e3dd8d74e611a900b6b4c/6458b61822d8d77750748bb1_help-center.svg"
                            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"
                            style="margin-bottom: 20px;">
                        <h2 class="fw-normal">24/7 Help Center</h2>
                        <p>And lastly this, the third column of representative placeholder content.</p>
                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
        </section>
    </div>

    <!-- <div class="container col-md-9 d-flex justify-content-center mt-2">
        <button class="btn btn-danger py-2 " style="font-weight: bold; font-size: 18px; width: 100%;" id="wishBtn"><i
                class="fa-solid fa-heart me-2" style="font-size: 16px;"></i>Add
            to
            Wishlist</button>
    </div> -->

    <!-- Wish Toast -->
    <!-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
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
        const toastTriggerCart = document.getElementById('cartBtn')
        const toastLiveExampleCart = document.getElementById('cartToast')

        if (toastTriggerCart) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExampleCart)
            toastTriggerCart.addEventListener('click', () => {
                console.log('Clicked the cart button');
                toastBootstrap.show()
            })
        }
    </script> -->


</div>

@endsection