<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Mã sản phẩm</label>
                <input type="text" class="form-control" required name="ma_hh" id="ma_hh" placeholder="Nhập mã sản phẩm">
            </div>
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" required name="ten_hh" id="ten_hh" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="thumbnail">Ảnh</label>
                <div class="input-group">
                    <input type="file" required name="thumbnail">
                </div>
            </div>

            <label for="summernote">Mô tả</label>
            <textarea name="mo_ta" required id="summernote"></textarea>

            <div class="form-group">
                <label for="price">Giá sản phẩm</label>
                <input type="number" class="form-control" required name="gia" id="gia" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group">
                <label for="sale_price">Giá khuyến mãi</label>
                <input type="number" class="form-control" required name="giam_gia" id="giam_gia"
                       placeholder="Nhập giá khuyến mãi">
            </div>
            <div class="form-group">
                <label for="price">Ngày nhập</label>
                <input type="date" class="form-control" required name="ngay-nhap" id="ngay-nhap" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group">
                <label for="sale_price">Đặc biệt</label>
                <div class="form-group">
                    <input type="radio" class="" required name="dac_biet" id="dac_biet" value="1">Có</input>
                    <input type="radio" class="" required name="dac_biet" id="dac_biet" value="0">Không</input>
                </div>

            </div>
            <div class="form-group">
                <label for="product_category_id">Loại</label>
                <input type="text" required  class="form-control" id="ma_loai" name="ma_loai">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>