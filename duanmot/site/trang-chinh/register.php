<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Đăng Ký</h4>
        <form action="?pages=trang-chinh&action=register" method="post" onsubmit="return validateForm()">

            <div class="form-group">
                <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" placeholder="nhập tên" name="user" id="nameInput">
                <small id="nameError" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="nhập email" name="email" id="emailInput">
                <small id="emailError" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Tạo mật khẩu</label>
                <input class="form-control" type="password" name="pass" id="passInput">
                <small id="passError" style="color: red;"></small>
            </div>
            <div class="form-group">
                <center>
                    <button type="submit" class="btn btn-primary" name="btn-register">Đăng Ký</button>
                </center>
            </div>
        </form>
    </div>
    <?php
    if (isset($success)) echo $GLOBALS['success'] ? $GLOBALS['success'] : '';
    ?>
</div>
<p class="text-center">Đã có tài khoản? <a href="?pages=trang-chinh&action=login">Đăng nhập</a></p>
<script>
    function validateForm() {
        var nameInput = document.getElementById("nameInput");
        var emailInput = document.getElementById("emailInput");
        var passInput = document.getElementById("passInput");
        var nameError = document.getElementById("nameError");
        var emailError = document.getElementById("emailError");
        var passError = document.getElementById("passError");
        var isValid = true;

        if (nameInput.value.trim() === "") {
            nameError.innerHTML = "Vui lòng điền tên đăng nhập.";
            isValid = false;
        } else {
            nameError.innerHTML = "";
        }

        var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (emailInput.value.trim() === "") {
            emailError.innerHTML = "Vui lòng điền email.";
            isValid = false;
        } else if (!emailRegex.test(emailInput.value)) {
            emailError.innerHTML = "Email không hợp lệ.";
            isValid = false;
        } else {
            emailError.innerHTML = "";
        }

        if (passInput.value === "") {
            passError.innerHTML = "Vui lòng điền mật khẩu.";
            isValid = false;
        } else {
            passError.innerHTML = "";
        }

        return isValid;
    }
</script>