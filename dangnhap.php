<?php 
session_start();
if (isset($_SESSION['name'])) {
    header("Location: .");
}
$pagename= 'Đăng nhập';
include 'templates/header.php'; ?>
	<div class="body-page">
		<div class="container">
			<span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Đăng nhập</span></span>
			<div class="clearfix">
				<div class="side-bar">
					<h1 class="title-line"><span>Tài Khoản</span></h1>
					<div>
						<p><a href="#"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a></p>
						<p><a href="#"><i class="fas fa-user-plus"></i>Đăng ký</a></p>
					</div>
				</div>
				<div class="main-login-content">
					<h1 class="title-line"><span>Đăng nhập</span></h1>
					<div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                                            <form class="form-horizontal form-login" method="post" action="php_check_acc/check_customer.php" onsubmit="return check_login()">
                                <div class="form-group">
                                    <label for="Username" class="col-sm-4 control-label">Tên đăng nhập</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-ctrl" name="acctxt" id="log-acc">
                                        <span id="log-acc-erro" style="color: red"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Password" class="col-sm-4 control-label">Mật khẩu</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control form-ctrl" name="passtxt"  id="log-pass">
                                        <span id="log-pass-erro" style="color: red"></span>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" name="submit_log_customer" class="submit-login-btn btn btn-default button-form">Đăng nhập</button>
                                    </div>
                                    <script src="js/check_acc_customer.js" language="javascript"></script>
                                </div>
                            </form>
				    </div>
				</div>
			</div>
<?php include 'templates/footer.php'; ?>