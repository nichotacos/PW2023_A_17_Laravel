@extends('admin.admin-dashboard') @section('content')

<div class="content">
    <div class="container-fluid" id="main2">
        <div class="row d-flex">
            <div class="col-lg-3 col-md-6">
                <div class="container bg-primary" style="border-radius: 10px 10px 0px 0px;">
                    <div class="row d-flex justify-content-between">
                        <div class="row d-flex align-items-center mt-3">
                            <div class="col-md-5">
                                <i class="fa-solid fa-boxes-stacked fa-5x"></i>
                            </div>
                            <div class="col-md-7" style="text-align: right;">
                                <p class="notif-number" style="margin: 0px;">{{ $productsQty }}</p>
                                <p class="notif-info">Stocks in Warehouse!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-2" style="background-color: rgb(238, 238, 238); border-radius: 0px 0px 10px 10px;">
                    <a class="link" href="{{ url('/stocks') }}">View Details<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="container bg-success" style="border-radius: 10px 10px 0px 0px;">
                    <div class="row d-flex justify-content-between">
                        <div class="row d-flex align-items-center mt-3">
                            <div class="col-md-5">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-md-7" style="text-align: right;">
                                <p class="notif-number" style="margin: 0px;">{{ $usersQty }}</p>
                                <p class="notif-info">Users Data!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-2" style="background-color: rgb(238, 238, 238); border-radius: 0px 0px 10px 10px;">
                    <a class="link" href="{{ url('/users') }}">View Details<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="container bg-warning" style="border-radius: 10px 10px 0px 0px;">
                    <div class="row d-flex justify-content-between">
                        <div class="row d-flex align-items-center mt-3">
                            <div class="col-md-5">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-md-7" style="text-align: right;">
                                <p class="notif-number" style="margin: 0px;">{{ $cartsQty }}</p>
                                <p class="notif-info">New Orders!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-2" style="background-color: rgb(238, 238, 238); border-radius: 0px 0px 10px 10px;">
                    <a class="link" href="{{ url('/orders') }}">View Details<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="container bg-danger" style="border-radius: 10px 10px 0px 0px;">
                    <div class="row d-flex justify-content-between">
                        <div class="row d-flex align-items-center mt-3">
                            <div class="col-md-5">
                                <i class="fa fa-life-ring fa-5x"></i>
                            </div>
                            <div class="col-md-7" style="text-align: right;">
                                <p class="notif-number" style="margin: 0px;">13</p>
                                <p class="notif-info">Support Tickets!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-2" style="background-color: rgb(238, 238, 238); border-radius: 0px 0px 10px 10px;">
                    <a class="link" href="{{ url('/support') }}">View Details<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="container-fluid mt-3">
            <h2 style="font-weight: bold;">Sales Report</h2>
            <canvas id="myChart" style="width:100%;max-width:1000px"></canvas>
        </div>
    </div>
</div>

<!-- Chart CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<!-- Chart Script -->
<script>
    const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>

@endsection