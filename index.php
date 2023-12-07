<?php
require '../config/base.php';
$content = BASE_URL."content/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>KDBOOK &mdash; Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?= $content ?>fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= $content ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $content ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $content ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= $content ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $content ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $content ?>css/aos.css">
    <link rel="stylesheet" href="<?= $content ?>css/style.css">


    <style>
        /* Common styles for both desktop and mobile */
        .site-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .box {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
        }

        /* Desktop styles */
        @media (min-width: 768px) {
            .box {
                width: 33.33%;
                float: left;
            }
        }

        /* Mobile styles */
        @media (max-width: 767px) {
            .box {
                width: 100%;
                float: none;
            }
        }
    </style>
</head>

<body>

<div class="site-wrap">
    <?php
    require 'trang-chinh/header.php';
    ?>

    <?php
    session_start();
    include_once('../module/cart.php');
    include_once('../module/pod.php');
    include_once('../module/category.php');
    include_once('../module/product.php');
    include_once('../module/auth.php');
    if(!isset($_SESSION['listCart']))
        $_SESSION['listCart'] = [];

    $listProduct = $ProductService->selectProductAll();
    $listProductTop = $ProductService->selectTop();
    $listCategory = loadCategoryAll();

    $pages = "trang-chinh";
    if(isset($_GET["pages"])) {
        $pages = $_GET["pages"];
        switch($pages) {
            case "trang-chinh":
                $action = "trang-chinh/trang_chu.php";
                if(isset($_GET["action"])) {
                    $action = $_GET["action"];
                    switch($action) {
                        case "trang-chu":
                            include "trang-chinh/trang_chu.php";
                            break;
                        case "about":
                            include "trang-chinh/about.php";
                            break;
                        case "shop":
                            if(isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $product = $ProductService->selectProductOne($id);
                                extract($product);
                                $productCate = $ProductService->selectProSameCate($iddm, $id);
                                $listComment = $ProductService->selectComment($id);
                                include_once('./trang-chinh/shop-single.php');
                            } else {
                                include "trang-chinh/shop.php";
                            }
                            break;
                        case "comment":
                            if(isset($_POST['btn-comment'])) {
                                $content = $_POST['content'];
                                $idPro = $_POST['id-pro'];
                                $idUser = $_SESSION['user']['id'];
                                $ProductService->insertComment($content, $idUser, $idPro);
                                header('location: ?pages=trang-chinh&action=shop&id='.$idPro);
                            } else
                                header('location: index.php');
                            break;
                        case "tin-tuc":
                            include "trang-chinh/tin-tuc.php";
                            break;
                        case "contact":
                            include "trang-chinh/contact.php";
                            break;
                        case "cart":
                            include "trang-chinh/cart.php";
                            break;
                        case "add-cart";
                            if(isset($_POST['add-cart'])) {
                                $id = $_POST['id'];
                                $name = $_POST['name'];
                                $img = $_POST['img'];
                                $price = $_POST['price'];
                                $proCart = [$id, $name, $img, $price, 1];
                                array_push($_SESSION['listCart'], $proCart);
                            }
                            include_once("trang-chinh/cart.php");
                            break;
                        case "delete-cart":
                            if(isset($_GET['id'])) {
                                $id = $_GET['id'];
                                array_splice($_SESSION['listCart'], $id, 1);
                                header('location: ?pages=trang-chinh&action=cart');
                            }
                            header('location: ?pages=trang-chinh&action=cart');
                            break;
                        case "checkout":
                            include "trang-chinh/checkout.php";
                            break;
                        case "login":
                            if(isset($_POST['btn-login'])) {
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $isUser = $serviceAuth->login($user, $pass);
                                if(is_array($isUser)) {
                                    $_SESSION['user'] = $isUser;
                                    // header('location: index.php');
                                }
                            }
                            include "trang-chinh/login.php";
                            break;
                        case "bill":
                            if(empty($_SESSION['listCart']))
                                header('location: ?pages=trang-chinh&action=trang-chu');
                            else include_once("trang-chinh/checkout.php");
                            break;
                        case "bill-confirm":
                            if(isset($_POST['btn-confirm-bill'])) {
                                $name = $_POST['user'];
                                $email = $_POST['email'];
                                $tel = $_POST['tell'];
                                $address = $_POST['address'];
                                $payment = $_POST['payment'];
                                $total = $_POST['total'];
                                $idBill = $serviceCart->insertBill($_SESSION['user']['id'], $name, $address, $tel, $email, $payment, $total);
                                foreach($_SESSION['listCart'] as $value) {
                                    $serviceCart->insertCart($_SESSION['user']['id'], $value[2], $value[1], $value[3], $value[4], $idBill);
                                }
                                $_SESSION['listCart'] = null;
                            }
                            $bill = $serviceCart->queryBill($idBill);
                            $listCart = $serviceCart->queryCart($idBill);
                            include_once("trang-chinh/billConfirm.php");
                            break;
                        case "my-bill":
                            $listBill = $serviceCart->queryBills($_SESSION['user']['id']);
                            include_once('trang-chinh/myBill.php');
                            break;
                        case "register":
                            if(isset($_POST['btn-register'])) {
                                $user = $_POST['user'];
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                $serviceAuth->register($user, $email, $pass);
                                $success = "Đăng ký thành công";
                            }
                            include("trang-chinh/register.php");
                            break;
                        case "logout":
                            session_unset();
                            header('location: ?pages=trang-chinh&action=login');
                            break;
                        case "chi-tiet":
                            include "trang-chinh/shop-single.php";
                            break;
                        case "cam-on":
                            include "trang-chinh/thankyou.php";
                            break;
                        default:
                            include "trang-chinh/trang_chu.php";
                            break;
                    }
                }

                break;
        }
    }
    ?>
    <?php
    require 'trang-chinh/footer.php';
    ?>
</div>

<script src="<?= $content ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= $content ?>js/jquery-ui.js"></script>
<script src="<?= $content ?>js/popper.min.js"></script>
<script src="<?= $content ?>js/bootstrap.min.js"></script>
<script src="<?= $content ?>js/owl.carousel.min.js"></script>
<script src="<?= $content ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= $content ?>js/aos.js"></script>
<script src="<?= $content ?>js/main.js"></script>

</body>

</html>