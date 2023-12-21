<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 10px 8px 10px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        #main2 {
            transition: margin-left .5s;
            padding: 16px;
        }

        .animate #main2 {
            transition: width .5s;
        }

        #logo {
            height: 40px;
            width: 40px;
            margin-right: 10px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        i {
            font-size: 20px;
            color: white;
            padding-right: 18px;
        }

        .notif-number {
            font-size: 48px;
            color: white;
        }

        .notif-info {
            color: white;
        }

        .fa-arrow-circle-right {
            margin-left: 5px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        tr:hover {
            box-shadow: 0px 0px 20px #7a7a7a;
        }
    </style>

    <nav class="navbar navbar-dark bg-dark" aria-label="navbar" id="main">
        <div class="row d-flex justify-content-start" style="width: 300px;">
            <div class="col-3">
                <button class="openbtn" onclick="openNav()">☰</button>
            </div>
            <div class="container-fluid col-9 d-flex align-items-center">
                <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{ asset('images/logo.png') }}" id="logo">Admin Kedai</a>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="wrapper">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="{{ url('/admin') }}">Home</a>
            <a href="#">Transaction</a>
            <a href="{{ url('/users') }}">Users</a>
            <a href="{{ url('/stocks') }}">Stocks</a>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">@yield('content')</div>

    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("main2").style.marginLeft = "250px";
            document.getElementById("main2").style.width = "calc(100vw - 250px)";
            document.getElementById("main2").classList.add("animate");

        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("main2").style.marginLeft = "0";
            document.getElementById("main2").style.width = "100vw";
        }
    </script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>

</html>