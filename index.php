<?php
include_once('../module/pod.php');
include_once('../module/auth.php');
include_once('../module/cart.php');
include_once('../module/product.php');
include_once('../module/user.php');
include_once('./header.php');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
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
        case "list-bill":
            if (isset($_POST['btn-search-bill'])) {
                $id = $_POST['search-bill'];
                $listBill = $serviceCart->queryBill($id, 'array');
                include_once('./bill/index.php');
            } else {
                $listBill = $serviceCart->queryBill();
                include_once('./bill/index.php');
            }
            break;
        case "delete-bill":
            if (isset($_GET['id'])) {
                $serviceCart->deleteBill($_GET['id']);
                header('location: /admin/index.php?act=list-bill');
            }
            break;
        case "edit-bill":
            if (isset($_GET['id'])) {
                $bill = $serviceCart->queryBill($_GET['id']);
            }
            include_once('./bill/editBill.php');
            break;
        case "update-bill":
            if (isset($_POST['btn-update-bill'])) {
                $status = $_POST['status'];
                $id = $_POST['id'];
                $serviceCart->updateBill($id, $status);
                header('location: /admin/index.php?act=list-bill');
            }
            break;
                }
} else {
    include_once('./home.php');
}
include_once('./footer.php');
