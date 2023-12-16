<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="?pages=trang-chinh&action=trang-chu">Trang chủ</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Thank</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-black">Cảm ơn!</h2>
                    <p class="lead mb-5">Cảm ơn bạn đã mua hàng tại shop.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="">
                                <div class="form-group">
                                    <strong class="box_title">Thông tin đơn hàng</strong>
                                    <div class="box_content form_account" style="min-height: 20px;">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php if (isset($oders_detail)) :
                                                    echo "<p>Mã đơn hàng: MDH-" . $oders_detail['id'] . "</p>"; ?>
                                                    <p>Ngày đặt hàng: <?=$oders_detail['ngaydathang'] ?></p>
                                                    <p>Tổng tiền đơn hàng: <?= $oders_detail['total'] ?></p>
                                                    <p>Phương thức thanh toán: <?= $oders_detail['pttt'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="box_title">Thông tin đặt hàng</div>
                            <div class="box_content form_account" style="min-height: 20px;">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Người dùng: <?= $_SESSION['user']['user'] ?></p>
                                        <p>Địa chỉ: <?= $_SESSION['user']['address'] ?></p>
                                        <p>Email: <?= $_SESSION['user']['email'] ?></p>
                                        <p>Số điện thoại: <?= $_SESSION['user']['tel'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><a href="?pages=trang-chinh&action=shop" class="btn btn-sm btn-primary">Tiếp tục</a></p>
                </div>
            </div>
        </div>
    </div>
</div>