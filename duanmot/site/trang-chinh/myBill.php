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
<div class="card-body">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="site/index.php/?pages=trang-chinh&action=trang-chu">Trang chủ</a> <span
                    class="mx-2 mb-0">/</span> <strong class="text-black">Đơn hàng</strong></div>
    </div>
    <div class="card-header">
        <main class="catalog mb ">
            <div class="boxleft">

                <?php
                if (!empty($listoders_detail)) {
                    ?>
                    <div class="box_content form_account" style="min-height: 20px;">
                        <table class="table table-head-fixed text-nowrap text-center">
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Số lượng</th>
                                <th>Tổng giá trị đơn hàng</th>
                                <th>Tình trang đơn hàng</th>
                            </tr>
                            <?php
                            foreach ($listoders_detail as $key => $value) {
                                $status = $serviceoders->getStatusoders_detail($value['status']);
                                $amount = $serviceoders->getAmountoders($value['id']);
                                ?>
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <?= $value['id'] ?>
                                    </td>
                                    <td style="padding: 10px 0;">
                                        <?= $value['ngaydathang'] ?>
                                    </td>
                                    <td style="padding: 10px 0;">
                                        <?= $amount ?>
                                    </td>
                                    <td style="padding: 10px 0;">
                                        <?= $value['total'] ?>
                                    </td>
                                    <td style="padding: 10px 0;">
                                        <?= $status ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                    <br>
                    <div class="row mb10">
                        <a href="?pages=trang-chinh&action=oders_detail"> <input class="btn btn-primary" type="button"
                                                                                 value="Tiếp tục" /></a>
                    </div>
                    <?php
                } else {
                    ?>
                    <p class="box_content form_account" style="text-align: center; min-height: 20px">
                        Hóa đơn trống
                    </p>
                    <?php
                }
                ?>
            </div>
        </main>
    </div>

</div>

</div>