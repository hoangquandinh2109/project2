<?php

include './connect_sever.php';
session_start();
$account = $_SESSION['adminname'];
if (isset($_POST["update_detail_admin"])) {
    $name = $_POST["nametxt"];
    $phone = $_POST["phonetxt"];
    $address = $_POST["addresstxt"];
    $sql = "update admin set ADMIN_NAME='$name', ADMIN_PHONE='$phone', ADMIN_ADDRESS='$address'"
            . "where ADMIN_USERNAME='$account'";
    if (mysqli_query($conn, $sql)) {
        echo'<script>alert("cập nhật thành công");window.location="../admin/admin_detail.php";</script>';
    }
}
if (isset($_POST['submit_update_pass_admin'])) {
    $oldpass = $_POST["oldpasstxt"];
    $pass = $_POST["newpasstxt"];
    $oripass= $_SESSION['adminpass'];
    $sqli = "update admin set ADMIN_PASSWORD='$pass' where ADMIN_USERNAME='$account'";
    if ($oldpass == $oripass) {
        if (mysqli_query($conn, $sqli)) {
             $_SESSION['adminpass'] = $pass;
            echo'<script>alert("cập nhật thành công");window.location="../admin/admin_detail.php";</script>';
        }
    }else{
        echo'<script>alert("Mật khẩu cũ chưa chính xác");window.history.back();</script>';
    }
}
?>