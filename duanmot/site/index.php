<?php
require '../config/base.php';
$content = BASE_URL . "content/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
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

</head>

<body>

  <div class="site-wrap">
    <?php
    require 'trang-chinh/header.php';
    ?>
    <?php
    $pages = "trang-chinh";
    if (isset($_GET["pages"])) {
      $pages = $_GET["pages"];
      switch ($pages) {
        case "trang-chinh":
          $action = "trang-chinh/trang_chu.php";
          if (isset($_GET["action"])) {
            $action = $_GET["action"];
            switch ($action) {
              case "trang-chu":
                include "trang-chinh/trang_chu.php";
                break;
              case "about":
                include "trang-chinh/about.php";
                break;
              case "shop":
                include "trang-chinh/shop.php";
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
              case "checkout":
                include "trang-chinh/checkout.php";
                break;
              case "login":
                include "trang-chinh/login.php";
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

        default:
          //include "index.php";
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