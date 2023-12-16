<style>
    .site-wrap {
        padding: 20px;
    }

    .bg-light {
        background-color: #f8f9fa;
    }

    .text-black {
        color: #000;
    }

    .text-primary {
        color: #007bff;
    }

    .h4 {
        font-size: 20px;
        font-weight: bold;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .mb-2 {
        margin-bottom: 2px !important;
    }

    .mb-3 {
        margin-bottom: 3px !important;
    }

    .mb-5 {
        margin-bottom: 5px !important;
    }

    .input-group {
        max-width: 120px;
    }

    .input-group-prepend,
    .input-group-append {
        display: flex;
    }

    .btn {
        display: inline-block;
        font-weight: bold;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
    }

    .btn-outline-primary {
        color: #007bff;
        background-color: transparent;
        background-image: none;
        border-color: #007bff;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .buy-now {
        background-color: #007bff;
        color: #fff;
    }
</style>
<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">
                        <?php echo $name ?>
                    </strong></div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/upload/<?php echo $img ?>" alt="Image" class="" style=" width: 250px; height: 350px; ">
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">
                        <?php echo $name ?>
                    </h2>
                    <div>
                        <?php echo $mota ?>
                    </div>
                    <p><strong class="text-primary h4">
                            <?php echo number_format($price, 0) ?>Đ
                        </strong></p>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder=""
                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user']['id']) {
                        ?>
                        <form action="?pages=trang-chinh&action=add-oders" method="post">
                            <input type="hidden" value="<?= $id ?>" name="id">
                            <input type="hidden" value="<?= $name ?>" name="name">
                            <input type="hidden" value="<?= $img ?>" name="img">
                            <input type="hidden" value="<?= $price ?>" name="price">
                            <button class="add" name="add-oders">Thêm vào giỏ hàng</button>
                        </form>
                        <?php
                    } else {
                        ?>
                        <button onclick="alert('Vui lòng đăng nhập')" class="buy-now btn btn-sm btn-primary" name="add-oders">Thêm vào
                            giỏ hàng</button>
                        <?php

                    }
                    ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h4> Bình luận</h4>
        <div class="card">
            <form>
                <div class="">
                    <div class="card-body">
                        <div class="row mb10 formds_loai">
                            <table class="table table-head-fixed text-nowrap">
                                <tr>
                                    <th>Nội dung</th>
                                    <th>Tài khoản</th>
                                    <th>Ngày bình luận</th>
                                </tr>
                                <?php
                                foreach ($listComment as $key => $value) {

                                    ?>
                                    <tr>
                                        <td>
                                            <?= $value['noidung'] ?>
                                        </td>
                                        <td>
                                            <?= $value['user'] ?>
                                        </td>
                                        <td>
                                            <?= $value['ngaybinhluan'] ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if (isset($_SESSION['user']) && $_SESSION['user']['id']) {
            ?>
            <form action="?pages=trang-chinh&action=comment" method="POST">
                <input type="hidden" name="id-pro" value="<?= $id ?>">
                <textarea class="form-control" name="content" id="content" rows="2"
                          placeholder="Nhập bình luận của bạn"></textarea>
                <button type="submit" name="btn-comment" class="btn btn-primary">Gửi</button>
            </form>
        <?php } else { ?>
            <div class="primary" style="color: red; font-weight: bold;">Bạn cần đăng nhập để bình luận sản phẩm này ! </div>
            <!-- <button onclick="alert('Vui lòng đăng nhập')" type="submit" name="btn-comment" class="btn btn-primary">Gửi</button> -->
        <?php } ?>
    </div>
</div>