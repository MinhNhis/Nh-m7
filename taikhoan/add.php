<h1>THÊM MỚI TÀI KHOẢN</h1>
<form action="index.php?act=add-user" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="" class="form-label">ID khách hàng</label>
        <input type="text" name="id" placeholder="Auto tăng" disabled class="form-control" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User</label>
        <input type="text" class="form-control" name="user" placeholder="Nhập vào tên">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Nhập email">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tel</label>
        <input type="text" class="form-control" name="tel" placeholder="Nhập vào sđt">
    </div>
    <div class="mb-3">
        <label for="">Role</label>
        <div class="form-control">
            <label for="" class="radio-inline"><input type="radio" name="role" value="0">Khách hàng </label>
            <label for="" class="radio-inline"><input type="radio" name="role" value="1" checked>Nhân viên
            </label>
        </div>
    </div>


    <button type="submit" name="btn-add" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="index.php?act=list-user"><input class="btn btn-primary" type="button" value="DANH SÁCH" /></a>
</form>