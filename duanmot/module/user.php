<?php
class User {
    function insertUser($user, $pass, $email, $address, $tel, $role) {
        $sql = "INSERT INTO TAIKHOAN VALUES(NULL, '$user', '$pass', '$email', '$address', '$tel', '$role' )";
        pdo_execute($sql);
    }

    function deleteUser($id) {
        $sql = "DELETE FROM TAIKHOAN WHERE id=$id";
        pdo_execute($sql);
    }

    function updateUser($user, $pass, $email, $address, $tel, $role, $id) {
        $sql = "UPDATE TAIKHOAN SET user='$user', pass='$pass', email='$email', address='$address', tel='$tel', role='$role' WHERE id=$id";
        pdo_execute($sql);
    }

    function selectUserAll() {
        $sql = "SELECT * FROM TAIKHOAN ORDER BY ID DESC";
        return pdo_query($sql);
    }

    function selectUserOne($id) {
        $sql = "SELECT * FROM TAIKHOAN WHERE ID = $id";
        return pdo_query_one($sql);
    }

    function checkuser($user, $pass) {
        $sql = "SELECT * FROM TAIKHOAN WHERE user=? AND pass=?";
        return pdo_query_one($sql, $user, $pass);
    }

    function get_user($id) {
        $sql = "SELECT * FROM TAIKHOAN WHERE id=?";
        return pdo_query_one($sql, $id);
    }
}

$UserService = new User;