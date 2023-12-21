<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Sweet Alert -->
    <link href="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css
        " rel="stylesheet">

    <!-- Import Local CSS -->
    <link rel="stylesheeet" type="text/css" href="../css/star.css" />
    <style>
        body {
            background-color: #FFFFFF;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-weight: 700;
            font-size: 40px;
        }

        .carousel-ban-text-adj h1 {
            color: black;
        }

        .navbar {
            background-color: white;
            position: fixed;
            top: 0;
            width: 100%;
            transition: all 0.3s;
        }

        .navbar--hidden {
            transform: translateY(-74px);
        }

        .nav-item {
            display: flex;
            align-items: center;
        }

        i {
            font-size: 24px;
        }

        .nav-link {
            font-weight: bold;
            display: inline-block;
            padding: 15px 20px;
            position: relative;
            font-size: 18px;
        }

        .nav-link.item:after {
            background: none repeat scroll 0 0 transparent;
            bottom: 0;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            position: absolute;
            background: #5EE137;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;
        }

        .nav-link.item:hover:after {
            width: 100%;
            left: 0;
        }

        .active {
            color: #5EE137 !important;
        }

        .fa-brands {
            font-size: 32px;
        }

        .sign-up {
            cursor: pointer;
            color: #5EE137;
            text-decoration: none;
            font-weight: normal;
            font-size: 20px;
        }

        #logo {
            height: 40px;
            width: 40px;
            margin-right: 10px;
        }

        .dropdown:hover.a .dropdown-menu.a {
            display: block;
            margin-top: 185px;
            /* remove the gap so it doesn't close */
        }



        .items:hover {
            box-shadow: 0px 0px 20px #5EE137;
            transition: 0.3s;
            cursor: pointer;
        }

        .carousel-ban-text-adj {
            position: absolute;
            width: 800px;
            display: flex;
            align-items: center;
            margin-left: 70px;
            bottom: 170px;
            border-radius: 12px;
            padding: 8px;
        }

        .carousel-ban-text-adj-tv {
            position: absolute;
            width: 800px;
            display: flex;
            align-items: center;
            margin-left: 70px;
            bottom: 85px;
            border-radius: 12px;
            padding: 8px;
        }

        .buy-button:hover {
            box-shadow: 0px 0px 20px #5EE137;
            transition: 0.3s;
        }

        .to-details {
            text-decoration: none;
            color: black;
        }

        /*.item-img {
            height: 120px;
            width: 120px;
        }*/
    </style>
</head>

<body>
    <div class="content">
        <div class="container d-flex justify-content-center" style="margin-top: 87px;">
            <div class="container d-flex justify-content-center" style="border: solid; border-color: #5EE137; border-radius: 7%; margin-top: 50px; margin-left: 320px; margin-right: 320px; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
                <div class="container py-5 px-5">
                    <form class=" row g-3 needs-validation" style="padding-left: 10px; padding-right: 10px;" action="{{ route('actionLogin') }}" method="POST" novalidate>
                        @csrf
                        <p style="font-size: 32px; font-weight: bold;">Login</p>
                        <hr>
                        <div class="col-md-12">
                            <label for="validationCustom05" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="validationCustom05" value="" required>
                            <div class="invalid-feedback">
                                Please input a valid username.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom04" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please input a valid Password.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-12">
                                <button class="submit-button" type="submit" style="background-color: #5EE137; border: none; padding: 5px; padding-left: 15px; padding-right: 15px;">Login</button>
                                <p class="text-start mt-3">Belum punya akun? <a href="{{ url('register') }}">Register disini</a></p>
                            </div>
                            @if(session('error'))
                            <div class="alert alert-danger">
                                <b>Oops!</b> {{ session('error') }}
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                $("#staticBackdrop2").modal('show');
            }, false)
        })
    })()
</script>