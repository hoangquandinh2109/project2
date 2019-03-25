<?php 
session_start();
if (isset($_SESSION['name'])) {
    header("Location: .");
}
$pagename= 'Đăng ký';
include 'templates/header.php'; ?>
	<div class="body-page">
		<div class="container">
			<span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Đăng ký</span></span>
			<div class="clearfix">
				<div class="side-bar">
					<h1 class="title-line"><span>Tài Khoản</span></h1>
					<div>
						<p><a href="#"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a></p>
						<p><a href="#"><i class="fas fa-user-plus"></i>Đăng ký</a></p>
					</div>
				</div>
				<div class="main-login-content">
					<h1 class="title-line"><span>Đăng ký tài khoản</span></h1>
					<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                                            <form class="form-horizontal form-login" method="post" name="form-sign" action="php_check_acc/check_customer.php" onsubmit="return check_signup()">
                                <h2><span>Thông tin tài khoản</span></h2>                                             
                                <div class="form-group">
                                    <label for="Code" class="col-sm-4 control-label">Tên đăng nhập<span class="warning">(*)</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-ctrl" name="accounttxt" id="acc-sign"
                                               value="" pattern="^[A-Za-z0-9]{6,20}"  autofocus=""
                                               title="ta`i khoa?n pha?i tu` 6 ki´ tu? tro? lên va` không duo?c chu´a khoa?ng tra´ng">
                                        <span id="erro-acc" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-4 control-label">Email<span class="warning">(*)</span></label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control form-ctrl"  name="emailtxt" id="email-sign" 
                                               pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})"
                                               title="email pha?i du´ng di?nh da?ng xxxx@xxxx.xxx">
                                        <span id="erro-email" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Password" class="col-sm-4 control-label" class="chancecolor">Mật khẩu<span class="warning">(*)</span></label>
                                    <div class="col-sm-8">
                                       <input type="password" class="form-control form-ctrl"  name="passtxt" id="pass-sign" onkeyup="check_pass()"
                                               pattern="^[A-Za-z0-9]{6,100}"  
                                               title="ta`i khoa?n pha?i tu` 6 ki´ tu? tro? lên">
                                        <span id="erro-pass" style="color:red;">
                                        </span>
                                        <span id="erro-pass-medium" style="color:#ffcc00;"></span>
                                        <span id="erro-pass-high" style="color:#00cc33;"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="RePassword" class="col-sm-4 control-label">NNhập lại mật khẩu<span class="warning">(*)</span></label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control form-ctrl" name="repasstxt" id="repass-sign" onkeyup="check_repass()">
                                        <span id="erro-repass" style="color:red;"></span>
                                    </div>
                                </div>
                                <h2>Thông tin cá nhân</h2>
                                <div class="form-group">
                                    <label for="Name" class="col-sm-4 control-label">Họ tên<span class="warning">(*)</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-ctrl" name="nametxt" id="name-sign" >
                                        <span id="erro-name" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Giới tính</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-ctrl" name="gendertxt">
                                            <option value="1" label="Nữ" selected="selected">Nữ</option>
                                            <option value="0" label="Nam">Nam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-inline">
                                    <label class="col-sm-4 control-label">Ngày sinh</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="dobtxt" class="form-control datepicker form-ctrl">
                                        <span id="erro-dob" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="form-group form-inline">
                                    <label for="" class="col-sm-4 control-label">Ðiện thoại</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-ctrl" name="phonetxt" id="phone-sign" 
                                               pattern="^[0-9]{10}" value=""
                                               title="sdt ba´t buô?c pha?i la` 10 sô´">
                                        <span id="erro-phone" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Ðịa chỉ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-ctrl" name="addresstxt" id="add-sign" >
                                        <span id="erro-address" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" name="submit_add_customer" class="submit-login-btn btn btn-default button-form"  >Ðăng ký</button>
                                    </div>
                                </div>
                                <script src="js/check_acc_customer.js" language="javascript"></script>
                            </form>
				    </div>
				</div>
			</div>
			
<?php include 'templates/footer.php'; ?>