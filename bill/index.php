<div class="row2">
    <div class="row2 font_title">
        <h1>Danh sách đơn hàng</h1>
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
                        <th></th>
                        <th>Mã DH</th>
                        <th>KH</th>
                        <th>Số hàng</th>
                        <th>Giá trị DH</th>
                        <th>Tình trạng DH</th>
                        <th>Ngày đặt</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listBill as $key => $value) {
                        $deleteBill = "/admin/index.php?act=delete-bill&id=" . $value['id'];
                        $editBill = "/admin/index.php?act=edit-bill&id=" . $value['id'];
                        $amount = $serviceCart->getAmountCart($value['id']);
                        $status = $serviceCart->getStatusBill($value['status']);
                        ?>
                        <tr>
                            <td><input type="checkbox" name="" id="" /></td>
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
                                <a href="<?php echo $editBill ?>"><input type="button" value="Sửa" /></a>
                                <a href="<?php echo $deleteBill ?>"> <input type="button" value="Xóa" /></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ" />
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ" /> -->
            <a href="index.php?act=add-product"> <input class="btn btn-primary" type="button" value="NHẬP THÊM" /></a>
        </form>
    </div>
</div>