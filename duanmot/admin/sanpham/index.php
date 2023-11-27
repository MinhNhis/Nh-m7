<style>
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .table th {
        font-weight: bold;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .btn-action {
        margin-right: 5px;
    }
</style>
<div class="row">
    <div class="row font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row form_content">
        <form action="#" method="POST">
            <div class="form formds_loai">
                <table class="table table-head-fixed text-nowrap">
                    <tr>
                        <th></th>
                        <th>Mã SP</th>
                        <th>Tên SP</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Lượt xem</th>
                        <th>Id danh mục</th>
                        <th>Hành động</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listProduct as $key => $value) {
                        $deleteProduct = "/admin/index.php?act=delete-product&id=" . $value['id'];
                        $editProduct = "/admin/index.php?act=edit-product&id=" . $value['id'];
                        ?>
                        <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['price'] ?></td>
                            <td> <img src="/upload/<?php echo $value['img'] ?>" alt="" width="50" style="object-fit: cover;"> </td>
                            <td><?php echo $value['luotxem'] ?></td>
                            <td><?php echo $value['iddm'] ?></td>
                            <td>
                                <a href="<?php echo $editProduct ?>"><input class="btn btn-primary" type="button" value="Sửa" /></a>
                                <input class="btn btn-danger" type="button" value="Xóa" onclick="confirmDelete('<?php echo $deleteProduct ?>')" />
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <a href="index.php?act=add-product"><input class="btn btn-primary" type="button" value="NHẬP THÊM" /></a>
        </form>
    </div>
</div>

<script>
    function confirmDelete(deleteUrl) {
        if (confirm("Bạn có chắc muốn xóa không?")) {
            window.location.href = deleteUrl;
        }
    }
</script>