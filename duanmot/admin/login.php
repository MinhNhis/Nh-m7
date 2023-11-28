<?php

include "../module/pod.php";
include "../module/user.php";
if (isset($_POST["login"])) {
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    $user = $UserService->checkuser($uname, $psw);
    if (isset($user) && (is_array($user)) && (count($user) > 0)) {
        extract($user);
        if ($role == 1) {
            $_SESSION['s_user'] = $user;
            header('location: index.php');
        } else {
            $tb = "Tài khoản này không được truy cập vào trang quản trị";
        }
    } else {
        $tb = "Tài khoản này sai tên đăng nhập hoặc không tồn tại!";
    }
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f2f2f2;
    }

    h2 {
        text-align: center;
        margin-top: 40px;
    }

    form {
        border: 1px solid #ccc;
        background-color: #fff;
        margin: 0 auto;
        max-width: 400px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>

<h2>Trang đăng nhập admin</h2>

<form action="login.php" method="post">
    <div class="imgcontainer">
        <img src="../upload/LOGO.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <?php
        if (isset($tb) && ($tb != "")) {
            echo "<h3 style='color:red'>" . $tb . "</h3>";
        }
        ?>
        <button type="submit" name="login">ĐĂNG NHẬP</button>
    </div>
</form>