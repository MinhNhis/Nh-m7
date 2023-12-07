<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="?pages=trang-chinh&action=trang-chu">Home</a> <span
                        class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Checkout</strong></div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <form action="?pages=trang-chinh&action=bill-confirm" method="POST">
                <div class="row">

                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Chi tiết thanh toán</h2>

                        <div class="p-3 p-lg-5 border">
                            <?php if(isset($_SESSION['user'])) { ?>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_fname" class="text-black">Người đặt hàng<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="user" value="<?= $_SESSION['user']['user'] ?>">
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" value="<?= $_SESSION['user']['address'] ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                    <label for="c_email_address" class="text-black">Địa chỉ email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" value="<?= $_SESSION['user']['email'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_phone" class="text-black">Số điện thoại<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="tell" value="<?= $_SESSION['user']['tel'] ?>">
                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Ghi chú</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                                      placeholder="Hãy viết gì đó..."></textarea>
                        </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Đơn hàng của bạn</h2>
                    <div class="p-3 p-lg-5 border">
                        <table class="table site-block-order-table mb-5">
                            <thead>
                            <th>Sản phẩm</th>
                            <th>Tổng tiền</th>
                            </thead>
                            <tbody>
                            <?php
                            $total = 0;
                            foreach($_SESSION['listCart'] as $key => $value) {
                                $total += $value[3];
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $value[1] ?><strong class="mx-2">x</strong>
                                        <?php echo 1 ?>
                                    </td>
                                    <td>
                                        <?php echo $value[3] ?>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                            <tr>
                                <td class="text-black font-weight-bold"><strong>Tổng thanh toán</strong></td>
                                <td class="text-black font-weight-bold"><strong>
                                        <?= $total ?>
                                    </strong></td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="mb-3">
                            <input checked id="ttktt" type="radio" name="payment" value="0">
                            <label for="ttktt" style="font-size: 16px; color: #000; padding-bottom: 6px;">Trả tiền khi thanh
                                toán</label>
                        </div>
                        <div class="mb-3">
                            <input id="cknh" type="radio" name="payment" value="1">
                            <label for="cknh" style="font-size: 16px; color: #000; padding-bottom: 6px;">Chuyển khoản ngân
                                hàng</label>
                        </div>
                        <div class="">
                            <input type="hidden" name="total" value="<?= $total ?>">
                            <input name="btn-confirm-bill" class=" btn btn-danger" type="submit" value="Đồng ý đặt hàng" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>