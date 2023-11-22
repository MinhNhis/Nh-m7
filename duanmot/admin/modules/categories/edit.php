<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa Loại</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Mã loại</label>
                <input type="text" class="form-control" required name="ma_loai" id="ma_loai" placeholder="Nhập mã loại">
            </div>
            <div class="form-group">
                <label for="price">Tên loại</label>
                <input type="number" class="form-control" required name="ten_loai" id="ten_loai"
                       placeholder="Nhập tên loại">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>