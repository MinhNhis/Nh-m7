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
                }
} else {
    include_once('./home.php');
}
include_once('./footer.php');
