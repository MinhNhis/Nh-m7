<style>
    .card {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 10px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        margin-top: 20px;
    }

    .form_li {
        list-style-type: none;
        margin-bottom: 5px;
    }

    .form_li a {
        text-decoration: none;
        color: #007bff;
    }

    .form_li a:hover {
        color: #0056b3;
    }
</style>
<div class="mb-3">
    <div class="box_content form_account">
        <?php
        if (isset($_SESSION['user'])) {
            ?>
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">
                        Xin Chào
                        <?php echo $_SESSION['user']['user'] ?>
                    </h4>
                    <p class="card-text">
                    <div class="text-left">
                        <ul>
                            <!-- <li class="form_li"><a href="index.php?act=edit-account">Chỉnh sửa tài khoản</a></li> -->
                            <li class="form_li"><a href="?pages=trang-chinh&action=oders">Giỏ hàng</a></li>
                            <li class="form_li"><a href="?pages=trang-chinh&action=my-oders_detail">Đơn hàng của tôi</a>
                            </li>
                            <?php echo $_SESSION['user']['role'] ? "<li class='form_li'><a href='http://da1111/admin/'>Đăng nhập Dashboard</a></li>" : "" ?>
                            <li class="form_li"><a href="?pages=trang-chinh&action=logout">Đăng xuất</a></li>
                        </ul>
                    </div>
                    </p>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
                <div class="card-body">
                    <h4 class="card-title mb-4">Đăng nhập</h4>

                    <form action="?pages=trang-chinh&action=login" method="POST" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="email" class="form-label">Tài khoản</label>
                            <input type="text" class="form-control" name="user" id="nameInput">
                            <small id="nameError" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" name="pass" id="passInput">
                            <small id="passError" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary" name="btn-login">Đăng nhập</button>
                            </center>
                            <!-- <li class="form_li"><a href="index.php?act=forgot-password">Quên mật khẩu</a></li> -->
                            <li class="form_li"><a href="?pages=trang-chinh&action=register">Đăng kí thành viên</a></li>
                        </div>
                    </form>

                </div>
            </div>
            <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="?pages=trang-chinh&action=register">Đăng ký</a></p>
            <br><br>
            <?php
        }
        ?>
    </div>
</div>
<script>
    function validateForm() {
        var nameInput = document.getElementById("nameInput");
        var passInput = document.getElementById("passInput");
        var nameError = document.getElementById("nameError");
        var passError = document.getElementById("passError");
        var isValid = true;

        if (nameInput.value.trim() === "") {
            nameError.innerHTML = "Nhập tài khoản.";
            isValid = false;
        } else {
            nameError.innerHTML = "";
        }
        if (passInput.value === "") {
            passError.innerHTML = "Nhập mật khẩu.";
            isValid = false;
        } else {
            passError.innerHTML = "";
        }

        return isValid;
    }
</script>