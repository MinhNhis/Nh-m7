<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">sản phẩm</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
        <label for="name">Tên sản phẩm</label>
        <input type="text" class="form-control" value="" required name="name" id="name"
          placeholder="Nhập tên sản phẩm">
      </div>
      <div class="form-group">
        <label for="thumbnail">Ảnh</label>
        <div class="input-group">
          <input type="file" value="" required name="thumbnail">
        </div>
      </div>

      <label for="summernote">Nội dung</label>
      <textarea name="content" required id="summernote"></textarea>

      <div class="form-group">
        <label for="price">Giá sản phẩm</label>
        <input type="number" class="form-control" value="" required name="price" id="price"
          placeholder="Nhập giá sản phẩm">
      </div>
      <div class="form-group">
        <label for="sale_price">Giá khuyến mãi</label>
        <input type="number" class="form-control" value="" required name="sale_price"
          id="sale_price" placeholder="Nhập giá khuyến mãi">
      </div>
      <div class="form-group">
                <label for="product_category_id">Danh mục</label>
                <input type="text" required  class="form-control" id="product_category_id" name="product_category_id">
            </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
