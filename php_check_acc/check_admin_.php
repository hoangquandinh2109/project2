<?php
include './connect_sever.php';
if (isset($_POST['submit_add_admin'])) {
    $account = $_POST['acc-add'];
    $pass = $_POST['pass-add'];
    $name = $_POST['name-add'];
    $phone = $_POST['phone-add'];
    $email = $_POST['email-add'];
    $role = $_POST['role-add'];
    $address = $_POST['address-add'];  
    $check_account = "select * from admin where ADMIN_USERNAME='$account'";
    $check_email = "select * from admin where ADMIN_EMAIL='$email'";   
    if (mysqli_num_rows(mysqli_query($conn, $check_account)) > 0) {
        alert ("Tài khoản đã có người dùng! Vui lòng dùng tài khoản khác");
        exit;
    }
    if (mysqli_num_rows(mysqli_query($conn, $check_email)) > 0) {
        alert("email đã có người sử dụng! Vui lòng dùng email khác");
        exit;
    }
    $sqlsu = "insert into customer(ADMIN_USERNAME,ADMIN_PASSWORD,ADMIN_NAME, 
        ADMIN_EMAIL, ADMIN_PHONE, ADMIN_ADDRESS,ADMIN_ROLE)
        values ('$account', '$password', N'$name','$email','$phone',N'$address','0')";
    if (mysqli_query($conn, $sqlsu)) {      
        $_SESSION['name'] = $account;
        session_start();
    }
}

if (isset($_POST['submit_log_admin'])) {
    $account = $_POST['acc_admin'];
    $pass = $_POST['pass_admin']; 
    $sqlli = "select * from customer where ADMIN_USERNAME='$account' and ADMIN_PASSWORD='$password' ";
    if (mysqli_num_rows(mysqli_query($conn, $sqlli)) > 0) {
        $_SESSION['adminname'] = $account;
        session_start();
    } else {
        alert("Tài khoản hoặc mật khẩu chưa chính xác!!");
        exit;
    }
}

?>