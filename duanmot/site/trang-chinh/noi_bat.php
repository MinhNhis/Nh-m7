<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Sản phẩm nổi bật</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">
                    <?php
                    foreach ($listProduct as $key => $value) {
                        extract($value);
                        $link = "?pages=trang-chinh&action=shop&id=" . $id;
                        ?>
                        <div class="card" style="width: 18rem;">
                            <center>
                                <a href="<?= $link ?>">
                                    <img src="/upload/<?php echo $img ?>" class="card-img-top" alt="..."
                                         style="width:150px; height: 200px; ">
                                </a>
                            </center>
                            <div class="card-body">
                                <a href="<?= $link ?>">
                                    <h6 class="card-title text-center">
                                        <?php echo $name ?>
                                    </h6>
                                </a>
                                <p class="card-text text-center">
                                    <?php echo number_format($price, 0) ?>đ
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>