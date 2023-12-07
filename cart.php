<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="?pages=trang-chinh&action=trang-chu">Trang chủ</a> <span
                        class="mx-2 mb-0">/</span> <strong class="text-black">Giỏ hàng</strong></div>
            </div>
            <?php
            if (isset($_SESSION['listCart']) && !empty($_SESSION['listCart'])) {
            ?>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="product-thumbnail">Ảnh</th>
                                <th class="product-name">Sản phẩm</th>
                                <th class="product-price">Giá</th>
                                <th class="product-quantity">Số lượng</th>
                                <th class="product-total">Tổng</th>
                                <th class="product-remove">Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $total = 0;
                            foreach ($_SESSION['listCart'] as $key => $value) {
                                $total += $value[3];
                                $delete = "?pages=trang-chinh&action=delete-cart&id=$key";
                                ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="/upload/<?= $value[2] ?>" width="30" alt="<?= $value[1] ?>">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h6 text-black">
                                            <?php echo $value[1] ?>
                                        </h2>
                                    </td>
                                    <td>
                                        <?php echo number_format($value[3], 0) ?>đ
                                    </td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center" value="<?php echo 1 ?>" placeholder=""
                                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <?php echo number_format($value[3], 0) ?>đ
                                    </td>
                                    <td><a href="<?= $delete ?>" class="btn btn-primary">X</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <!-- <div class="col-md-6 mb-3 mb-md-0">
                          <button class="btn btn-primary btn-sm btn-block">Cập nhật giỏ hàng</button>
                        </div> -->
                        <div class="col-md-6">
                            <a href="?pages=trang-chinh&action=shop">
                                <button class="btn btn-outline-primary btn-sm btn-block">Tiếp tục mua hàng</button>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Tổng giỏ hàng</h3>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Tổng tiền</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">
                                        <?= number_format($total, 0) ?>đ
                                    </strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-lg py-3 btn-block"
                                            onclick="window.location='?pages=trang-chinh&action=checkout'">Thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    } else {
        ?>
        <p class="box_content form_account" style="text-align: center; min-height: 20px">
            Giỏi hàng trống
        </p>
        <?php
    }
    ?>
</div>