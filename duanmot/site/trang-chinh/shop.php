<style>
    .block-4 {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .block-4-image {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .block-4-image img {
        object-fit: cover;
        max-width: 100%;
        max-height: 100%;
    }

    .block-4-text {
        padding: 1rem;
        text-align: center;
    }

    .item_name {
        font-weight: bold;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .price {
        font-size: 14px;
    }

    .add {
        margin-top: 10px;
        background-color: #0d6efd;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>
<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="site/index.php/?pages=trang-chinh&action=trang-chu">Trang chủ</a> <span
                        class="mx-2 mb-0">/</span> <strong class="text-black">Cửa hàng</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-9 order-2">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="float-md-left mb-4">
                                <h2 class="text-black h5">Shop All</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <?php
                        foreach($listProduct as $key => $value) {
                            extract($value);
                            $link = "?pages=trang-chinh&action=shop&id=".$id;
                            ?>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="<?= $link ?>"><img src="/upload/<?php echo $img ?>" alt="" class="" width="200px"
                                                                    height="200px"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <a class="item_name" href="<?= $link ?>">
                                            <?php echo $name ?>
                                        </a>
                                        <p class="price">
                                            <?php echo number_format($price, 0) ?>đ
                                        </p>
                                        <div>
                                            <?php
                                            if(isset($_SESSION['user']) && $_SESSION['user']['id']) {
                                                ?>
                                                <form action="?pages=trang-chinh&action=add-oders" method="post">
                                                    <input type="hidden" value="<?= $id ?>" name="id">
                                                    <input type="hidden" value="<?= $name ?>" name="name">
                                                    <input type="hidden" value="<?= $img ?>" name="img">
                                                    <input type="hidden" value="<?= $price ?>" name="price">
                                                    <button class="add" name="add-oders">Thêm vào giỏ hàng</button>
                                                </form>
                                                <?php
                                            } else { ?>
                                                <button onclick="alert('Vui lòng đăng nhập')" class="add" name="add-oders">Thêm vào giỏ hàng</button>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                require "trang-chinh/productCategory.php";
                ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="site-section site-blocks-2">
                        <div class="row justify-content-center text-center mb-5">
                            <div class="col-md-7 site-section-heading pt-4">
                                <h2>Categories</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                                <a class="block-2-item" href="#">
                                    <figure class="image">
                                        <img src="<?= $content ?>images/dragon-ball.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Truyện tranh</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                                <a class="block-2-item" href="#">
                                    <figure class="image">
                                        <img src="<?= $content ?>images/kinh-te.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Kinh tế</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                                <a class="block-2-item" href="#">
                                    <figure class="image">
                                        <img src="<?= $content ?>images/code-complete-2.png" alt="" class="img-fluid">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Giáo dục</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>