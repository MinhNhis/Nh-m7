<?php
include_once('../../module/product.php');

if (isset($_GET['id'])) {
    //$productCate = $ProductService->selectProductByCate($_GET['id']);
    // $nameCate = loadNameCate($_GET['id']);
    $listProduct = $ProductService->selectProductAll();
    $listCategory = loadCategoryAll();
} else {
    //include_once('./trang-chinh/shop.php');
}
?>
<div class="items" style="margin-top: 20px;">
    <?php
    foreach ( $listProduct as $key) {
        extract($key);
        $link = "index.php?act=product&id=" . $id;
        ?>
        <div class="box_items">
            <a href="<?php echo $link ?>">
                <div class="box_items_img">
                    <img src="/upload/<?php echo $img ?>" alt="" />
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href=""><?php echo $name ?></a>
                <p class="price">$<?php echo $price ?></p>
            </a>
        </div>
        <?php
    }
    ?>
</div>