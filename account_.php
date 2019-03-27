<?php 
$pagename= 'Thông tin cá nhân';
include 'templates/header.php'; ?>
	<div class="body-page">
		<div class="container">
			<span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Đăng ký</span></span>
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
				<!-- sdkjfldskfjlk -->
				<div class="main-login-content">
					<h1 class="title-line"><span>Đăng ký tài khoản</span></h1>
					<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
				        <form class="form-horizontal form-login">
				            <h2>Thông tin cá nhân</h2>
				            <div class="form-group">
				                <label for="Name" class="col-sm-4 control-label">Họ tên</label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control form-ctrl" value="Tiến văn phạm" required="true">
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="col-sm-4 control-label">Giới tính</label>
				                <div class="col-sm-8">
				                    <select class="form-control form-ctrl">
				                    	<option value="false" label="Nữ" selected="selected">Nữ</option>
				                    	<option value="true" label="Nam">Nam</option>
				                    </select>
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="Email" class="col-sm-4 control-label">Email</label>
				                <div class="col-sm-8">
				                    <input type="email" class="form-control form-ctrl" value="tien@gmail.com" required="true">
				                </div>
				            </div>
				            <div class="form-group form-inline">
				                <label class="col-sm-4 control-label">Ngày sinh</label>
				                <div class="col-sm-8">
				                    <input type="text" value="20-03-2019" class="form-control datepicker form-ctrl">
				                </div>
				            </div>
				            <div class="form-group form-inline">
				                <label for="" class="col-sm-4 control-label">Điện thoại</label>
				                <div class="col-sm-8">
				                    <input type="text" value="0975681266" class="form-control form-ctrl">
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="" class="col-sm-4 control-label">Địa chỉ</label>
				                <div class="col-sm-8">
				                    <input type="text" value="123 CMT3 p.14 q.10 TPHCM" class="form-control form-ctrl">
				                </div>
				            </div>

				            <div class="form-group">
				                <div class="col-sm-offset-4 col-sm-8">
				                    <button type="submit" class="submit-login-btn btn btn-default button-form">Cập nhật</button>
				                </div>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
			
<?php include 'templates/footer.php'; ?>