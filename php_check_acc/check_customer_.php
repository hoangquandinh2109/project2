<?php
        session_start();
include './connect_sever.php';
if (isset($_POST['submit_add_customer'])) {
    $account = $_POST['accounttxt'];
    $pass = $_POST['passtxt'];
    $name = $_POST['nametxt'];
    $phone = $_POST['phonetxt'];
    $email = $_POST['emailtxt'];
    $oridob = $_POST['dobtxt'];
    $gender=$_POST['gendertxt'];
    $address = $_POST['addresstxt'];  
    // $dob= date("Y-m-d",$oridob);
    $dob= date('Y-m-d',strtotime($oridob));
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
    $sqlsu = "insert into customer(CUSTOMER_USERNAME,CUSTOMER_PASSWORD,CUSTOMER_NAME, CUSTOMER_GENDER, 
        CUSTOMER_EMAIL, CUSTOMER_PHONE, CUSTOMER_AVATAR, CUSTOMER_DOB,CUSTOMER_ADDRESS,CUSTOMER_LOYALTY)
        values ('$account', '$pass', N'$name','$gender','$email','$phone','','$dob' ,N'$address','0')";
    if (mysqli_query($conn, $sqlsu)) {   
        session_destroy();   
        session_start();
        $_SESSION['name'] = $account;
        header("Location: ../index.php");
    }
}

if (isset($_POST['submit_log_customer'])) {
    $account = $_POST['acctxt'];
    $pass = $_POST['passtxt']; 
    $sqlli = "select * from customer where CUSTOMER_USERNAME='$account' and CUSTOMER_PASSWORD='$pass' ";
    if (mysqli_num_rows(mysqli_query($conn, $sqlli)) > 0) {
        session_destroy();
        session_start();
        $_SESSION['name'] = $account;
        // echo $_SESSION['name'];
        header("Location: ../index.php");
    } else {
        alert("Tài khoản hoặc mật khẩu chưa chính xác!!");
        exit;
    }
}

?>