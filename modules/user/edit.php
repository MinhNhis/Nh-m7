<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa khách hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Mã khách hàng</label>
                <input type="text" class="form-control" required name="ma_kh" id="ma_kh"
                       placeholder="Nhập mã khách hàng">
            </div>
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" required name="ten_kh" id="ten_kh"
                       placeholder="Nhập tên khách hàng">
            </div>
            <div class="form-group">
                <label for="thumbnail">Ảnh</label>
                <div class="input-group">
                    <input type="file" required name="thumbnail">
                </div>
            </div>
            <div class="form-group">
                <label for="name">Mật khẩu</label>
                <input type="password" class="form-control" required name="mat_khau" id="mat_khau"
                       placeholder="Nhập password">
            </div>
            <div class="form-group">
                <label for="name">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" required name="mat_khau1" id="mat_khau1"
                       placeholder="Nhập lại password">
            </div>
            <div class="form-group">
                <label for="sale_price">Kích hoạt</label>
                <div class="form-group">
                    <input type="radio" class="" required name="kich_hoat" id="kich_hoat" value="1">Đã kích hoạt</input>
                    <input type="radio" class="" required name="kich_hoat" id="kich_hoat" value="0">Chưa kích hoạt</input>
                </div>
                <label for="sale_price">Vai trò</label>
                <div class="form-group">
                    <input type="radio" class="" required name="vai_tro" id="vai_tro" value="1">Admin</input>
                    <input type="radio" class="" required name="vai_tro" id="vai_tro" value="0">khách hàng</input>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>