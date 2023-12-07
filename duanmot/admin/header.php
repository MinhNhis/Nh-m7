<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid main-page">
    <div class="app-main">
        <nav class="sidebar bg-dark">
            <ul>
                <li> <a href="index.php"><i class="fa-solid fa-house ico-side"></i>Dashboards</a> </li>
                <li> <a href="index.php?act=list-bill"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn
                        hàng</a> </li>
                <li> <a href="/admin/index.php?act=add-category"><i
                                class="fa-solid fa-folder-open ico-side"></i>Quản lí danh muc</a> </li>
                <li> <a href="index.php?act=add-product"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản
                        phẩm</a> </li>
                <li> <a href="index.php?act=list-user"><i class="fa-solid fa-user ico-side"></i>Quản lí người
                        dùng</a> </li>
                <li> <a href="index.php?act=analytics"><i class="fa-solid fa-user ico-side"></i>Quản lí thống kê</a>
                </li>
                <li> <a href="index.php?act=list-comment"><i class="fa-solid fa-user ico-side"></i>Quản lí bình
                        luận</a> </li>
                <li><a href="logout.php"><i class="fa-solid fa-sign-out-alt ico-side"></i>Đăng xuất</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <h3 class="title-page"> Dashboards </h3>
            <section class="statistics row">
                <div class="col-sm-12 col-md-6 col-xl-3"> <a href="products.html">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5> Tổng sản phẩm </h5>
                            </div> <span class="widget-numbers">3M</span>
                        </div>
                    </a> </div>
                <div class="col-sm-12 col-md-6 col-xl-3"> <a href="user.html">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5> Tổng thành viên </h5>
                            </div> <span class="widget-numbers">3M</span>
                        </div>
                    </a> </div>
                <div class="col-sm-12 col-md-6 col-xl-3"> <a href="caterogies.html">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5> Tổng doanh mục </h5>
                            </div> <span class="widget-numbers">3M</span>
                        </div>
                    </a> </div>
                <div class="col-sm-12 col-md-6 col-xl-3"> <a href="#">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5> Tổng doanh mục </h5>
                            </div> <span class="widget-numbers">3M</span>
                        </div>
                    </a> </div>
            </section>
</body>

</html>