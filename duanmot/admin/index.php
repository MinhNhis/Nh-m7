<?php

include_once('../module/pod.php');
include_once('../module/category.php');
include_once('../module/auth.php');
include_once('../module/oders.php');
include_once('../module/product.php');
include_once('../module/user.php');
include_once('./header.php');
$serviceCategory = new ServiceCategory();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'login':
            if (isset($_SESSION['s_user']) && (is_array($_SESSION['s_user'])) && (count($_SESSION['s_user']) > 0)) {
                $admin = $_SESSION['s_user'];
            } else {
                header('location: admin/login.php');
                exit;
            }

        case 'add-category':
            if (isset($_POST['add-new']))
                insertCategory($_POST['tenloai']);
            include_once('./danhmuc/add.php');
            break;
        case 'list-category':
            $listCategory = loadCategoryAll();
            include_once('./danhmuc/index.php');
            break;
        case 'edit-category':
            if (isset($_GET['id']) && $_GET['id'] > 0)
                $result = loadOne($_GET['id']);
            include_once('./danhmuc/update.php');
            break;
        case 'update-category':
            if (isset($_POST['btn-update']))
                updateCategory($_POST['id'], $_POST['tenloai']);
            $listCategory = loadCategoryAll();
            include_once('./danhmuc/index.php');
            break;
        case 'delete-category':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $categoryId = $_GET['id'];

                // Kiểm tra xem danh mục có sản phẩm hay không
                if ($serviceCategory->isCategoryEmpty($categoryId)) {
                    // Nếu danh mục không có sản phẩm, thực hiện xóa
                    $serviceCategory->deleteCategory($categoryId);
                    header('location:/admin/index.php?act=list-category');
                    exit;
                } else {
                    // Nếu danh mục có sản phẩm, hiển thị thông báo lỗi
                    echo "Không thể xóa danh mục có sản phẩm.";
                    exit;
                }
            }
            $listCategory = loadCategoryAll();
            include_once('./danhmuc/index.php');
            break;

        case 'add-product':
            $listCategory = loadCategoryAll();
            if (isset($_POST['btn-add'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img = $_FILES['img'];
                $nameImg = $img['name'];
                $tmpImg = $img['tmp_name'];
                move_uploaded_file($tmpImg, '../upload/' . $nameImg);
                $description = $_POST['description'];
                $idCategory = $_POST['id-category'];
                $ProductService->insertProduct($name, $price, $nameImg, $description, $idCategory);
            }
            include_once('./sanpham/add.php');
            break;
        case "list-product":
            $sql = "SELECT * FROM SANPHAM";
            $listProduct = pdo_query($sql);
            include_once('./sanpham/index.php');
            break;
        case "edit-product":
            if (isset($_GET['id'])) {
                $product = $ProductService->selectProductOne($_GET['id']);
                $listCategory = loadCategoryAll();
                include_once('./sanpham/update.php');
            }
            break;
        case "delete-product":
            if (isset($_GET['id'])) {
                $ProductService->deleteCommentByProduct($_GET['id']);
                $ProductService->deleteProduct($_GET['id']);
            }
            $listProduct = $ProductService->selectProductAll();
            include_once('./sanpham/index.php');
            break;
        case "update-product":
            if (isset($_POST['btn-update'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $idCategory = $_POST['id-category'];
                $img = $_FILES['img'];
                $ProductService->updatePProduct($name, $price, $fileImg, $description, $idCategory, $id);
            }
            $sql = "SELECT * FROM SANPHAM";
            $listProduct = pdo_query($sql);
            include_once('./sanpham/index.php');
            break;
        case "list-user":
            $listUser = $UserService->selectUserAll();
            include_once('./taikhoan/index.php');
            break;
        case 'add-user':
            if (isset($_POST['btn-add'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                $UserService->insertUser($user, $pass, $email, $address, $tel, $role);
            }
            include_once('./taikhoan/add.php');
            break;
        case "edit-user":
            if (isset($_GET['id'])) {
                $user = $UserService->selectUserOne($_GET['id']);
                include_once('./taikhoan/update.php');
            }
            break;
        case "delete-user":
            if (isset($_GET['id'])) {
                $UserService->deleteUser($_GET['id']);
            }
            $listUser = $UserService->selectUserAll();
            include_once('./taikhoan/index.php');
            break;
        case "update-user":
            if (isset($_POST['btn-update'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                $id = $_POST['id'];
                $UserService->updateUser($user, $pass, $email, $address, $tel, $role, $id);
            }
            $sql = "SELECT * FROM TAIKHOAN";
            $listUser = pdo_query($sql);
            include_once('./taikhoan/index.php');
            break;

        case "list-comment":
            $listComment = $ProductService->selectCommentAll();
            include_once('./binhluan/index.php');
            break;
        case "delete-comment":
            if (isset($_GET['id'])) {
                $ProductService->deleteComment($_GET['id']);
            }
            $listComment = $ProductService->selectCommentAll();
            include_once('./binhluan/index.php');
            break;
        case "list-oders_detail":
            if (isset($_POST['btn-search-oders_detail'])) {
                $id = $_POST['search-oders_detail'];
                $listoders_detail = $serviceoders->queryoders_detail($id, 'array');
                include_once('./bill/index.php');
            } else {
                $listoders_detail = $serviceoders->queryoders_detail();
                include_once('./bill/index.php');
            }
            break;
        case "delete-oders_detail":
            if (isset($_GET['id'])) {
                $serviceoders->deleteoders_detail($_GET['id']);
                echo '<script>window.location.href = "/admin/index.php?act=list-oders_detail";</script>';
                exit;
            }
            break;
        case "edit-oders_detail":
            if (isset($_GET['id'])) {
                $oders_detail = $serviceoders->queryoders_detail($_GET['id']);
            }
            include_once('./bill/editoders_detail.php');
            break;
        case "update-oders_detail":
            if (isset($_POST['btn-update-oders_detail'])) {
                $status = $_POST['status'];
                $id = $_POST['id'];
                $serviceoders->updateoders_detail($id, $status);
                echo '<script>window.location.href = "/admin/index.php?act=list-oders_detail";</script>';
                exit;
            }
            break;
        case "analytics":
            $listPro = $serviceoders->analytics();
            include_once('./thongke/index.php');
            break;
        case "chart":
            $listPro = $serviceoders->analytics();
            include_once('./thongke/chart.php');
            break;
        default:
            include_once('./home.php');
            break;
    }
} else {
    include_once('./home.php');
}
include_once('./footer.php');
