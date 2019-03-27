<?php

include './connect_sever.php';
if (isset($_POST['submit_add_customer'])) {
    $account = $_POST['accounttxt'];
    $pass = $_POST['passtxt'];
    $name = $_POST['nametxt'];
    $phone = $_POST['phonetxt'];
    $email = $_POST['emailtxt'];
    $oridob = $_POST['dobtxt'];
    $gender = $_POST['gendertxt'];
    $address = $_POST['addresstxt'];
    $dob = date("Y-m-d", strtotime($oridob));
    $check_account = "select * from customer where CUSTOMER_USERNAME='$account'";
    $check_email = "select * from customer where CUSTOMER_EMAIL='$email'";
    if (mysqli_num_rows(mysqli_query($conn, $check_account)) > 0) {
        echo'<script>alert("Đăng kí thất bại! Tài khoản đã có người dùng");window.history.back();</script>';
        die();
    } else {
        if (mysqli_num_rows(mysqli_query($conn, $check_email)) > 0) {
            echo'<script>alert("Đăng ký thất bại! Email đã có người sử dụng");window.history.back();</script>';
            exit;
        } else {
            $sqlsu = "insert into customer(CUSTOMER_USERNAME,CUSTOMER_PASSWORD,CUSTOMER_NAME, CUSTOMER_GENDER, 
        CUSTOMER_EMAIL, CUSTOMER_PHONE, CUSTOMER_DOB,CUSTOMER_ADDRESS,CUSTOMER_LOYALTY)
        values ('$account', '$pass', N'$name','$gender','$email','$phone','$dob' ,N'$address','0')";
            if (mysqli_query($conn, $sqlsu)) {
                session_start();
                $_SESSION['name'] = $account;
                $_SESSION['pass'] = $pass;
                echo'<script>alert("Đăng kí thành công");window.location="../index.php"</script>';
            }
        }
    }
}

if (isset($_POST['submit_log_customer'])) {
    $account = $_POST['acctxt'];
    $pass = $_POST['passtxt'];
    $sqlli = "select * from customer where CUSTOMER_USERNAME='$account' and CUSTOMER_PASSWORD='$pass' ";
    if (mysqli_num_rows(mysqli_query($conn, $sqlli)) > 0) {
        session_start();
        $_SESSION['name'] = $account;
        $_SESSION['pass'] = $pass;
          echo'<script>window.location="../index.php"</script>';
    } else {
        echo'<script>alert("Tài khoản hoặc mật khẩu chưa chính xác!!");window.history.back();</script>';
    }
}
?>