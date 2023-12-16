<?php
include_once('../module/oders.php');
include_once('../module/pod.php');
include_once('../module/category.php');
include_once('../module/product.php');

$listProduct = $ProductService->selectProductAll();
$listProductTop = $ProductService->selectTop();

//var_dump($listCategory);
if (isset($_GET['id'])) {
    $productCate = $ProductService->selectProductByCate($_GET['id']);
    // $nameCate = loadNameCate($_GET['id']);
    $listCategory = loadCategoryAll();
} else {
    include_once('./trang-chinh/shop.php');
}
?>
<div class="col-md-3 order-1 mb-5 mb-md-0">
    <div class="border p-4 rounded mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Danh mục </h3>
        <?php
        foreach ($listCategory as $loai) {
            extract($loai);
            $link = "../trang-chinh/liet_ke.php?ma_loai=" . $id;
            echo "<a href='" . $link . "' class='list-group-item'>" . $name . "</a>";
        }
        ?>
    </div>
</div>