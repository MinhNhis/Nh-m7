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
    <div class="row2">
        <div class="row2 font_title">
            <h4>DANH SÁCH ĐƠN HÀNG</h4>
        </div>
        <form action="/admin/index.php?act=list-bill" method="post" style="float: left;margin-top: 20px;">
            <input type="text" name="search-bill" placeholder="mã đơn hàng"><input type="submit" value="go"
                                                                                   name='btn-search-bill'>
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
                        foreach ($listBill as $key => $value) {
                            $deleteBill = "/admin/index.php?act=delete-bill&id=" . $value['id'];
                            $editBill = "/admin/index.php?act=edit-bill&id=" . $value['id'];
                            $amount = $serviceCart->getAmountCart($value['id']);
                            $status = $serviceCart->getStatusBill($value['status']);
                            ?>
                            <tr>
                                <td>
                                    <?php echo $value['id'] ?>
                                </td>
                                <td>
                                    <div style="text-align: left;">
                                        <p>
                                            <?= $value['billname'] ?>
                                        </p>
                                        <p>
                                            <?= $value['billemail'] ?>
                                        </p>
                                        <p>
                                            <?= $value['billaddress'] ?>
                                        </p>
                                        <p>
                                            <?= $value['billtel'] ?>
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
<!--                                    <a href="--><?php //echo $editBill ?><!--"><input type="button"class="btn btn-primary" value="Sửa" /></a>-->
                                    <a href="#" onclick="confirmDelete('<?php echo $deleteBill ?>')"><input
                                                class="btn btn-danger" type="button" value="Xóa" /></a>
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
<script>
    function confirmDelete(deleteUrl) {
        if (confirm("Bạn có chắc muốn xóa không?")) {
            window.location.href = deleteUrl;
        }
    }
</script>