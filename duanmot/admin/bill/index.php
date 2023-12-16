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
<div class="card">
    <div class="card-header">
        <div class="row2">
            <div class="row2 font_title">
                <h4>DANH SÁCH ĐƠN HÀNG</h4>
            </div>
            <form action="/admin/index.php?act=list-oders_detail" method="post" style="float: left;margin-top: 20px;">
                <input type="text" name="search-oders_detail" placeholder="mã đơn hàng"><input type="submit" value="go" name='btn-search-oders_detail'>
            </form>
            <div class="row2 form_content" style="margin-top: 20px;">
                <form action="#" method="POST">
                    <div class="row2 mb10 formds_loai">
                        <table class="table table-head-fixed text-nowrap">
                            <tr>
                                <th>Mã DH</th>
                                <th>KH</th>
                                <th>Số hàng</th>
                                <th>Giá trị DH</th>
                                <th>Tình trạng DH</th>
                                <th>Ngày đặt</th>
                                <th>Hành động</th>
                            </tr>
                            <?php
                            foreach ($listoders_detail as $key => $value) {
                                $deleteoders_detail = "/admin/index.php?act=delete-oders_detail&id=" . $value['id'];
                                $editoders_detail = "/admin/index.php?act=edit-oders_detail&id=" . $value['id'];
                                $amount = $serviceoders->getAmountoders($value['id']);
                                $status = $serviceoders->getStatusoders_detail($value['status']);
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $value['id'] ?>
                                    </td>
                                    <td>
                                        <div style="text-align: left;">
                                            <p>
                                                <?= $value['oders_name'] ?>
                                            </p>
                                            <p>
                                                <?= $value['odersemail'] ?>
                                            </p>
                                            <p>
                                                <?= $value['odersaddress'] ?>
                                            </p>
                                            <p>
                                                <?= $value['odertel'] ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <?= $amount ?>
                                    </td>
                                    <td>
                                        <?= $value['total'] ?>
                                    </td>
                                    <td>
                                        <?= $status ?>
                                    </td>
                                    <td>
                                        <?= $value['ngaydathang'] ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo $editoders_detail ?>"><input type="button" class="btn btn-primary" value="Sửa" /></a>
                                        <a href="#" onclick="confirmDelete('<?php echo $deleteoders_detail ?>')"><input type="button" class="btn btn-danger" value="Xóa" /></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(deleteUrl) {
        if (confirm("Bạn có chắc muốn xóa không?")) {
            window.location.href = deleteUrl;
        }
    }
</script>