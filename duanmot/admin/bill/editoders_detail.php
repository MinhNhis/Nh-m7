<div class="row2">
    <div class="row2 font_title">
        <h4>Chỉnh sửa đơn hàng</h4>
    </div>
    <div class="row2 form_content" style="margin: 10px 0; float: left;">
        <form action="/admin/index.php?act=update-oders_detail" method="POST">
            <div>
                <label>ID:</label>
                <input type="text" value="<?= $oders_detail['id'] ?>" disabled>
                <input type="hidden" value="<?= $oders_detail['id'] ?>" name="id">
                <label>Trạng thái:</label>
                <select name="status" id="">
                    <?php
                    $listStatus = ['Đơn mới', 'Xử lý', 'Vân chuyển', 'Hoàn tất'];
                    foreach ($listStatus as $key => $value) {
                        ?>
                        <option <?= $oders_detail['status'] == $key ? 'selected' : '' ?> value="<?= $key ?>">
                            <?= $value ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10" style="margin: 10px 0;">
                <input class="mr20" type="submit" value="Cập nhật" name="btn-update-oders_detail" />
            </div>
        </form>
    </div>
</div>