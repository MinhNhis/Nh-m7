<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Simple - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">
    <!-- App css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Welcome !</h4>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i>
                                    <b>8954</b>
                                </h2>
                                <p class="text-muted mb-0">Lifetime total sales</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>7841</b></h2>
                                <p class="text-muted mb-0">Income amounts</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>6521</b></h2>
                                <p class="text-muted mb-0">Total users</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>325</b>
                                </h2>
                                <p class="text-muted mb-0">Total visits</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="mt-0 font-14">Total Revenue</h5>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Series A
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-muted"></i>Series B</p>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-bar-stacked" class="morris-chart" dir="ltr" style="height: 300px;"></div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="mt-0 font-14">Sales Analytics</h5>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Mobiles
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-info"></i>Tablets</p>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-line-chart" class="morris-chart" dir="ltr" style="height: 300px;"></div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<script src="assets\js\vendor.min.js"></script>

<script src="assets\libs\morris-js\morris.min.js"></script>
<script src="assets\libs\raphael\raphael.min.js"></script>

<script src="assets\js\pages\dashboard.init.js"></script>

<!-- App js -->
<script src="assets\js\app.min.js"></script>

</body>

</html>