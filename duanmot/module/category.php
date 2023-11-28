<?php
class ServiceCategory {
    // Các phương thức và thuộc tính khác của lớp ServiceCart

    public function isCategoryEmpty($categoryId) {
        // Sử dụng logic của bạn để kiểm tra xem danh mục có sản phẩm hay không
        // Trả về true nếu danh mục không có sản phẩm, ngược lại trả về false
    }

    public function deleteCategory($categoryId) {
        // Sử dụng logic của bạn để kiểm tra xem danh mục có sản phẩm hay không
        // Trả về true nếu danh mục không có sản phẩm, ngược lại trả về false
    }


    // Các phương thức và thuộc tính khác của lớp ServiceCart
}

function insertCategory($nameCategory)
{
    $sql = "INSERT INTO DANHMUC VALUES(NULL, '$nameCategory')";
    pdo_execute($sql);
}

function deleteCategory($id)
{
    $sql = 'DELETE FROM DANHMUC WHERE ID=' . $id;
    pdo_execute($sql);
}

function loadCategoryAll()
{
    $sql = 'SELECT * FROM DANHMUC ORDER BY ID DESC';
    return pdo_query($sql);
}

function updateCategory($id, $name)
{
    $sql = "UPDATE DANHMUC SET NAME='$name' WHERE ID=$id";
    pdo_execute($sql);
}
function loadOne($id)
{
    $sql = 'SELECT * FROM DANHMUC WHERE ID=' . $id;
    return pdo_query_one($sql);
}

function loadNameCate($id)
{
    $sql = 'SELECT * FROM DANHMUC WHERE ID=' . $id;
    extract(pdo_query_one($sql));
    return $name;
}


