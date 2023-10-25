<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        .dropdown:hover .dropdown-menu {
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

    <!-- Nav Bar-->
    <nav class="navbar navbar-expand-md sticky-top border-bottom navbar-hide-on-scroll" data-bs-theme="light">
        <div class="container">
            <a class="navbar-brand d-md-none" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#aperture"></use>
                </svg>
                NamaToko
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                aria-controls="#offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="#offcanvasLabel">NamaToko</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 justify-content-evenly">
                        <li class="nav-item" style="margin-right: 40px;"><a class="nav-link item" href="{{ url('/') }}"
                                style="color: #5EE137; font-size: 22px;">
                                <img src="{{ asset('images/logo.png') }}" id="logo"> Kedai </a></li>
                        <li class="nav-item"><a class="nav-link item {{ ($title === 'Home') ? 'active' : '' }}"
                                href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <button
                                class="nav-link {{ ($title === 'Smartphones' || $title === 'Laptops' || $title === 'TVs') ? 'active' : '' }} btn btn-white dropdown-toggle"
                                aria-expanded="false">
                                Product
                            </button>
                            <ul class="dropdown-menu dropdown-menu-light" style="border: none; min-width: 400px;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <li><a class="dropdown-item" href="{{ url('/laptop') }}">Laptops</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/phone') }}">Smartphones</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/tv') }}">TVs</a></li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li><a class="dropdown-item" href="{{ url('/laptop') }}">Console</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/phone') }}">Audio</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/tv') }}">Gaming Gear</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link item" href="{{ url('/product') }}">Features</a></li>
                        <li class="nav-item"><a class="nav-link item dropdown" href="{{ url('/') }}">Enterprise</a></li>
                        <li class="nav-item"><a class="nav-link item" href="{{ url('/') }}">Support</a></li>
                        <li class="nav-item"><a class="nav-link item" href="{{ url('/') }}">Pricing</a></li>
                        <li class="nav-item" style="margin-left: 40px;"><a class="nav-link" href="#">
                                <button type="button" class="btn btn-white">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </a></li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn btn-white btn btn-white dropdown-toggle"
                                aria-expanded="false">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-light"
                                style="border: none; min-width: 200px; margin-top: 140px;">
                                <li><a class="dropdown-item" href="{{ url('/cart') }}">Cart</a></li>
                                <li><a class="dropdown-item" href="{{ url('/wishlist') }}">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <button type="button" class="btn btn-white login-btn" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="fa-regular fa-user"></i>
                                </button>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body mx-4">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label username">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom04" class="form-label password">Password</label>
                            <input type="password" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please select a valid Password.
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn px-5 py-2" id="submit-button"
                                style="background-color: #5EE137; color: white; font-weight: bold;">Login</button>
                        </div>
                    </form>
                    <div class="vstack gap-3" style="padding-top: 15px;">

                        <div class="container d-flex justify-content-center">
                            <p>Or Sign Up With</p>
                        </div>
                        <div class="container d-flex justify-content-evenly" style="width: 200px;">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-google"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <div class="container d-flex justify-content-center">
                                <a class="sign-up" href="{{ url('/register')}}">Sign Up</a>
                                <button type="button" class="btn"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Succeeded</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Press 'Ok' to navigate to Homepage
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Succeeded</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Press 'Ok' to navigate to Homepage
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">@yield('content')</div>

    <!-- Main Footer -->
    <footer class="container py-5" style="margin-top: 80px">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
                    viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                    </path>
                </svg>
                <small class="d-block mb-3 text-body-secondary">© 2017–2023</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js
        "></script>

    <!-- Hide Nav Bar-->
    <script>
        {
            const nav = document.querySelector(".navbar");
            let lastScrollY = window.scrollY;

            window.addEventListener("scroll", () => {
                if (lastScrollY < window.scrollY) {
                    nav.classList.add("navbar--hidden");
                } else {
                    nav.classList.remove("navbar--hidden");
                }

                lastScrollY = window.scrollY;
            });
        }
    </script>

    <!-- Modal Script -->
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#loginForm').formValidation({
                framework: 'bootstrap',
                excluded: ':disabled',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    }
                }
            });
        });
    </script>
    <script>
        function toProfile() {
            window.location.href = "{{ url('/profile') }}"
        }
    </script>
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
                    console.log('kksosos');
                    document.querySelector('.login-btn').setAttribute('data-bs-toggle', "");
                    document.querySelector('.login-btn').setAttribute('data-bs-target', "");
                    document.querySelector('.login-btn').setAttribute('onClick', 'toProfile()');

                }, false)
            })
        })()
    </script>

</body>

</html>