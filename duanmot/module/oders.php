<?php
class Serviceoders
{
    function insertoders_detail($idUser, $name, $address, $tel, $email, $payment, $total)
    {
        $time = date('d/m/Y');
        $sql = "INSERT INTO oders_detail VALUES(NULL, '$name', '$address', '$tel', '$email', $payment, '$time', $total, 0, $idUser)";
        return pdo_execute_last_result($sql);
    }
    function insertoders($idUser, $img, $name, $price, $soluong, $idoders_detail)
    {
        $sql = "INSERT oders VALUES(NULL, $idUser, '$img', '$name', $price, $soluong, $idoders_detail)";
        pdo_execute($sql);
    }

    function queryoders_detail($id = null, $type = 'object')
    {
        if ($id && $type === 'object') {
            $sql = "SELECT * FROM oders_detail WHERE ID = $id";
            return pdo_query_one($sql);
        } else if ($id && $type === 'array') {
            $sql = "SELECT * FROM oders_detail WHERE ID = $id";
            return pdo_query($sql);
        } else {
            $sql = "SELECT * FROM oders_detail";
            return pdo_query($sql);
        }
    }

    function queryoders($id)
    {
        $sql = "SELECT * FROM oders WHERE id_oders_detail = $id";
        return pdo_query($sql);
    }

    function queryoders_details($idUser)
    {
        $sql = "SELECT * FROM oders_detail WHERE IDUSER = $idUser";
        return pdo_query($sql);
    }

    function getStatusoders_detail($status)
    {
        switch ($status) {
            case 0:
                return "Đơn hàng mới";
            case 1:
                return "Đang xử lý";
            case 2:
                return "Đang giao hàng";
            case 3:
                return "Hoàn tất";
        }
    }
    function getAmountoders($idoders_detail)
    {
        return sizeof($this->queryoders($idoders_detail));
    }

    function deleteoders_detail($id)
    {
        $sql = "DELETE FROM oders_detail WHERE ID = $id";
        pdo_execute($sql);
    }

    function updateoders_detail($id, $status)
    {
        $sql = "UPDATE oders_detail SET STATUS=$status WHERE ID = $id";
        pdo_execute($sql);
    }

    function analytics()
    {
        $sql = "SELECT DANHMUC.NAME AS NAMEDM, COUNT(SANPHAM.ID) AS COUNTSP, MIN(SANPHAM.PRICE) AS MINPRICE, MAX(SANPHAM.PRICE) AS MAXPRICE, AVG(SANPHAM.PRICE) AS AVGPRICE FROM SANPHAM LEFT JOIN DANHMUC ON SANPHAM.IDDM = DANHMUC.ID GROUP BY DANHMUC.ID ORDER BY DANHMUC.ID DESC";
        return pdo_query($sql);
    }

    function analyticsPrice($type = 'min')
    {
    }
}

$serviceoders = new Serviceoders();

