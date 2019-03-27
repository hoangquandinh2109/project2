<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: .");
}
$pagename = 'Đổi mật khẩu';
include 'templates/header.php';
?>
<div class="body-page">
    <div class="container">
        <span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span>Tài khoản</span> <i class="fas fa-chevron-right"></i><span id="page-location">Đổi mật khẩu</span></span>
        <div class="clearfix">
            <div class="side-bar">
                <h1 class="title-line"><span>Tài Khoản</span></h1>
                <div>
                    <p><a href="account.php"><i class="fas fa-user"></i>Thông tin cá nhân</a></p>
                    <p><a href="myorders.php"><i class="far fa-list-alt"></i>Đơn hàng của tôi</a></p>
                    <p><a href="doimatkhau.php"><i class="fas fa-key"></i>Thay đổi mật khẩu</a></p>
                    <p><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></p>
                </div>
            </div>
            <div class="main-login-content">
                <h1 class="title-line"><span>Đổi mật khẩu</span></h1>
                <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                    <form class="form-horizontal form-login" method="post" action="php_check_acc/update_customer.php" onsubmit="return check_pass_update()">
                        <div class="form-group">
                            <label for="Username" class="col-sm-4 control-label" >Mật khẩu cũ</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control form-ctrl" name="oldpasstxt" id="oldpass" >
                                <span id="up-oldpass-erro" style="color: red"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Password" class="col-sm-4 control-label">Mật khẩu mới</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control form-ctrl" name="newpasstxt"  id="newpass" onkeyup="check_pass()"  pattern="^[A-Za-z0-9]{6,100}"  
                                               title="tài khoản phải từ 6 kí tự trở lên">
                                <span id="up-pass-erro" style="color: red"></span>
                                <span id="up-pass-erro-medium" style="color:#ffcc00;"></span>
                                <span id="up-pass-erro-high" style="color:#00cc33;"></span>
                            </div>
                        </div>  
                        <div class="form-group" style="width: 600px;margin-left: -70px;">
                            <label for="Password" class="col-sm-4 control-label">Nhập lại mật khẩu cũ</label>
                            <div class="col-sm-8" >
                                <input type="password" class="form-control form-ctrl" name="renewpasstxt"  id="renewpass" style="width: 260px" onkeyup="check_repass()">
                                <span id="up-repass-erro" style="color: red"></span>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" name="submit_up_pass" class="submit-login-btn btn btn-default button-form">Cập nhật</button>
                            </div>
                            <script src="js/check_update_cus.js" language="javascript"></script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php include 'templates/footer.php'; ?>