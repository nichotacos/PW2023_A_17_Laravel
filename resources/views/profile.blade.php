@extends('dashboard') @section('content')

<div class="content">
    <div class="container" style="margin-top: 80px;">
        <nav class="py-3" aria-label="breadcrumb" style="margin-bottom: 0px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
        <h1>Profile</h1>
        <div class="card container-fluid mt-4">
            <div class="card-body">
                <div class="row d-flex justify-content-evenly">
                    <div class="card col-lg-4 mx-1">
                        <div class="d-flex justify-content-center my-3">
                            <img class="rounded" src="{{ asset('images/' . Auth::user()->imageData) }}" style=" height: 280px; width: 280px;" />
                        </div>

                        <div class="mb-3">
                            <form action="{{ route('user.updateImage') }}" method="POST" enctype="multipart/form-data"> @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold mb-2 mx-1">Insert Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" placeholder="Masukkan Gambar" required>
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary mt-2">Save Image</button>
                            </form>
                        </div>
                    </div>
                    <div class="card col-lg-7 mx- d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-4 my-1 mx-4" style="font-size: 20px;">
                                <p>Name</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-name" type="text" value=" {{ Auth::user()->full_name }}" aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 my-1 mx-4" style=" font-size: 20px;">
                                <p>Username</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-uname" type="text" value=" {{ Auth::user()->username }}" aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 my-1 mx-4" style=" font-size: 20px;">
                                <p>Telephone</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-tel" type="text" value=" {{ Auth::user()->telephone }}" aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 my-1 mx-4" style=" font-size: 20px;">
                                <p>Address</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-tel" type="text" value=" {{ Auth::user()->address }}" aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-2 my-1 mx-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Update
                                </button>
                            </div>
                            <div class="col-lg-2 my-1">
                                <div class="btn btn-danger">
                                    <a style="text-decoration: none; color: white;" href="{{ route('actionLogout') }}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mx-3">
                    <h3>History</h3>
                    @forelse($carts as $item)
                    <div class="container d-flex align-items-start px-2 py-2">
                        <div class="card container px-2 py-2 shadow-sm">
                            <div class="row mx-4 d-flex justify-content-between">
                                <div class="col-lg-3 px-2 py-2 text-center" style="border-right-color: transparent;">
                                    <img src="{{ url($item->product->image) }}" class="card-img-top" alt="{{ $item->product->name }}" style="height: 180px; width: 180px;">
                                </div>
                                <div class="col-lg-3 px-2 py-2 d-flex align-items-center" style="border-left-color: transparent;">
                                    <div class="ps-3">
                                        <p style="font-size: 24px;">{{ $item->product->name }}</p>
                                        <p style="font-weight: bold; font-size: 18px;">IDR {{ number_format($item->total_price)
                                        }}</p>
                                        <p style="font-size: 18px; margin-bottom: 10px;">Quantity: <b>{{ $item->quantity }}</b></p>
                                        <p style="font-size: 18px; margin-bottom: 10px;">Status: <b class="{{ $item->status == 'On process' ? 'text-danger' : 'text-success' }}">{{ $item->status }}</b></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 px-2 py-2 d-flex align-items-center">
                                    @if($item->status == 'Shipped')
                                    @php
                                    $userReviewExists = false;
                                    @endphp
                                    @foreach($reviews as $review)
                                    @if($review->user_id == Auth::user()->id && $review->product->id == $item->product->id)
                                    @php
                                    $userReviewExists = true;
                                    @endphp
                                    <form style="width: 100%;">
                                        <div class="form-row">
                                            <label for="ratingForm">Your Rating:</label>
                                            <br>
                                            <input type="number" name="rating" min="1" max="5" id="ratingForm" value="{{ $review->rating }}" readonly>
                                        </div>
                                        <div class="form-row mt-3" style="width: 100%;">
                                            <label for="descForm">Your Description:</label>
                                            <br>
                                            <textarea type="text" name="desc" id="descForm" rows="4" readonly style="resize: none; width: 100%;">{{ $review->description }}</textarea>
                                        </div>
                                    </form>

                                    @endif
                                    @endforeach

                                    @unless($userReviewExists)
                                    <div style="width: 100%;">
                                        <form action="{{ route('storeReview') }}" method="post" style="width: 100%;"> @csrf
                                            <input type="text" hidden value="{{ Auth::user()->id }}" name="user_id">
                                            <input type="text" hidden value="{{ $item->product->id }}" name="product_id">
                                            <input type="date" hidden value="{{ date('Y-m-d') }}" name="added_date">
                                            <div class="form-row">
                                                <label for="ratingForm">Input Rating (1-5):</label>
                                                <br>
                                                <input type="number" name="rating" min="1" max="5" id="ratingForm" required>
                                            </div>
                                            <div class="form-row mt-3" style="width: 100%;">
                                                <label for="descForm">Input Description:</label>
                                                <br>
                                                <textarea type="text" name="desc" id="descForm" rows="4" required style="resize: none; width: 100%;"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-md btn-primary mt-2">Post Review</button>
                                        </form>
                                    </div>
                                    @endunless
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-danger my-4">
                        <b>No transaction has been done.</b>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('.button-name').addEventListener('click', () => {
        if (document.querySelector('.form-name').hasAttribute('disabled')) {
            document.querySelector('.form-name').removeAttribute('disabled');
        } else {
            document.querySelector('.form-name').setAttribute('disabled', 'disabled');
        }
    });
    document.querySelector('.button-uname').addEventListener('click', () => {
        if (document.querySelector('.form-uname').hasAttribute('disabled')) {
            document.querySelector('.form-uname').removeAttribute('disabled');
        } else {
            document.querySelector('.form-uname').setAttribute('disabled', 'disabled');
        }
    });
    document.querySelector('.button-tel').addEventListener('click', () => {
        if (document.querySelector('.form-tel').hasAttribute('disabled')) {
            document.querySelector('.form-tel').removeAttribute('disabled');
        } else {
            document.querySelector('.form-tel').setAttribute('disabled', 'disabled');
        }
    });
</script>

@endsection