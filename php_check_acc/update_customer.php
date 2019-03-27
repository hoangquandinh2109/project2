<?php

include './connect_sever.php';
session_start();
$account = $_SESSION['name'];
if (isset($_POST["update_cus"])) {
    $name = $_POST["nametxt"];
    $gender = $_POST["gendertxt"];
    $oridob = $_POST["dobtxt"];
    $phone = $_POST["phonetxt"];
    $address = $_POST["addresstxt"];
    $dob = date("Y-m-d", strtotime($oridob));
    $sql = "update customer set CUSTOMER_NAME='$name', CUSTOMER_GENDER='$gender', CUSTOMER_DOB='$dob', CUSTOMER_PHONE='$phone', CUSTOMER_ADDRESS='$address'"
            . "where CUSTOMER_USERNAME='$account'";
    if (mysqli_query($conn, $sql)) {
        echo'<script>alert("cập nhật thành công");window.location="../account.php";</script>';
    }
}
if (isset($_POST['submit_up_pass'])) {
    $oldpass = $_POST["oldpasstxt"];
    $pass = $_POST["newpasstxt"];
    $oripass = $_SESSION['pass'];
    $sqli = "update customer set CUSTOMER_PASSWORD='$pass' where CUSTOMER_USERNAME='$account'";
    if ($oldpass == $oripass) {
        if (mysqli_query($conn, $sqli)) {
            echo'<script>alert("cập nhật thành công");window.location="../account.php";</script>';
        }
    } else {
        echo'<script>alert("Mật khẩu cũ chưa chính xác");window.history.back();</script>';
    }
}

