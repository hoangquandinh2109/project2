<?php

include '../admin/adminvip.php';
include './connect_sever.php';
if (isset($_POST['submit_add_admin'])) {
    $account = $_POST['accounttxt'];
    $pass = $_POST['passtxt'];
    $name = $_POST['nametxt'];
    $phone = $_POST['phonetxt'];
    $email = $_POST['emailtxt'];
    $address = $_POST['addresstxt'];
    $role = $_POST['roletxt'];
    $check_account = "select * from admin where ADMIN_USERNAME='$account'";
    $check_email = "select * from admin where ADMIN_EMAIL='$email'";
    if (mysqli_num_rows(mysqli_query($conn, $check_account)) > 0) {
        echo'<script>alert("Đăng kí thất bại! Tài khoản đã có người dùng");window.history.back();</script>';
        exit;
    }
    if (mysqli_num_rows(mysqli_query($conn, $check_email)) > 0) {
        echo'<script>alert("Đăng ký thất bại! Email đã có người sử dụng");window.history.back();</script>';
        exit;
    }
    $sqlsu = "insert into admin(ADMIN_USERNAME,ADMIN_PASSWORD,ADMIN_NAME, 
        ADMIN_EMAIL, ADMIN_PHONE, ADMIN_ADDRESS,ADMIN_ROLE)
        values ('$account', '$pass', N'$name','$email','$phone',N'$address','$role')";
    if (mysqli_query($conn, $sqlsu)) {
        echo'<script>alert("Thêm thành công");window.location="../admin/themadmin.php"</script>';
    }
}
if (isset($_POST['submit_log_admin'])) {
    $account = $_POST['acc-admin'];
    $pass = $_POST['pass-admin'];

    if ($account == $abkjlskjdlfkjlluser && $pass == $ksdjfldksjflsdkjpass) {

        session_start();
        $_SESSION['adminname'] = $account;
        $_SESSION['adminpass'] = $pass;
        header("location: ../admin/index.php");
    } else {
        $sqlli = "select * from admin where ADMIN_USERNAME='$account' and ADMIN_PASSWORD='$pass' ";
        if (mysqli_num_rows(mysqli_query($conn, $sqlli)) > 0) {
            session_start();
            $_SESSION['adminname'] = $account;
            $_SESSION['adminpass'] = $pass;
            header("location: ../admin/index.php");
        } else {
             echo'<script>alert("Tài khoản hoặc mật khẩu chưa chính xác!!");window.history.back();</script>';
        }
    }
}
?>