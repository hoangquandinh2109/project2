<?php
include './php_check_acc/connect_sever.php';
session_start();
$pagename = 'Thông tin cá nhân';
include 'templates/header.php';
?>
<div class="body-page">
    <div class="container">
        <span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i><span>Tài khoản</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Thông tin cá nhân</span></span>
        <div class="clearfix">
            <div class="side-bar">
                <h1 class="title-line"><span>Tài Khoản</span></h1>
                <div>
                    <p><a href="#"><i class="fas fa-user"></i>Thông tin cá nhân</a></p>
                    <p><a href="#"><i class="far fa-list-alt"></i>Đơn hàng của tôi</a></p>
                    <p><a href="#"><i class="fas fa-key"></i>Thay đổi mật khẩu</a></p>
                    <p><a href="#"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></p>
                </div>
            </div>
            <div class="main-login-content">
                <h1 class="title-line"><span>Thông tin cá nhân</span></h1>
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                    <?php
                    $sqli = "select * from customer where CUSTOMER_USERNAME='" . $_SESSION['name'] . "'";
                    $result = mysqli_fetch_array(mysqli_query($conn, $sqli));
                    ?>
                    <form class="form-horizontal form-login" action="php_check_acc/update_customer.php" method="post" onsubmit="return check_update_info()">
                        <h2>Thông tin cá nhân</h2>
                        <div class="form-group">
                            <label for="Name" class="col-sm-4 control-label">Họ tên</label>
                            <div class="col-sm-8">
                                <input type="text" name="nametxt" id="name-cus" class="form-control form-ctrl" value="<?php echo $result["CUSTOMER_NAME"] ?>">
                                <span id="erro-name" style="color:red;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Giới tính</label>
                            <div class="col-sm-8">
                                <select class="form-control form-ctrl" name="gendertxt">
                                    <option value="0" label="Nữ" <?php if ($result["CUSTOMER_GENDER"] == 0) { ?> selected=""<?php } ?>>Nữ</option>
                                    <option value="1" label="Nam"   <?php if ($result["CUSTOMER_GENDER"] == 1) { ?> selected=""<?php } ?>>Nam</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" name="emailtxt" id="email-cus" class="form-control form-ctrl" value="<?php echo $result["CUSTOMER_EMAIL"] ?>"  disabled="">

                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-4 control-label">Ngày sinh</label>
                            <div class="col-sm-8">
                                <input type="text" name="dobtxt" id="dob-cus" value="<?php echo $dob = date("d-m-Y", strtotime($result["CUSTOMER_DOB"])); ?>" class="form-control datepicker form-ctrl">
                                <span id="erro-dob" style="color:red;"></span>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label for="" class="col-sm-4 control-label">Điện thoại</label>
                            <div class="col-sm-8">
                                <input type="text" name="phonetxt" id="phone-cus" value="<?php echo $result["CUSTOMER_PHONE"] ?>" class="form-control form-ctrl">
                                <span id="erro-phone" style="color:red;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Địa chỉ</label>
                            <div class="col-sm-8">
                                <input type="text" name="addresstxt" id="address-cus" value="<?php echo $result["CUSTOMER_ADDRESS"] ?>" class="form-control form-ctrl">
                                <span id="erro-address" style="color:red;"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" name="update_cus" class="submit-login-btn btn btn-default button-form">Cập nhật</button>
                            </div>
                        </div>
                        <script language="javascript" src="js/check_update_cus.js"></script>s
                    </form>
                </div>
            </div>
        </div>

        <?php include 'templates/footer.php'; ?>