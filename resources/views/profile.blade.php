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
        <div class="card container-fluid">
            @foreach($data as $item)
            <div class="card-body">
                <div class="row d-flex justify-content-evenly">
                    <div class="card col-lg-4 mx-1">
                        <img src="{{ asset('images/default.avif') }}" style="height: 280px; width: 280px;" />
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose a picture</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="card col-lg-7 mx-1 d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-4 my-1" style="font-size: 20px;">
                                <p>Name</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-name" type="text" value=" {{ $item['name'] }}"
                                    aria-label="Disabled input example" disabled>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-light mb-3 button-name"><i
                                        class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 my-1" style="font-size: 20px;">
                                <p>Username</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-uname" type="text" value=" {{ $item['username'] }}"
                                    aria-label="Disabled input example" disabled>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-light mb-3 button-uname"><i
                                        class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 my-1" style="font-size: 20px;">
                                <p>Telephone</p>
                            </div>
                            <div class="col-lg-6 my-1" style="font-size: 20px;">
                                <input class="form-control form-tel" type="text" value=" {{ $item['telephone'] }}"
                                    aria-label="Disabled input example" disabled>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-light mb-3 button-tel"><i
                                        class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
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