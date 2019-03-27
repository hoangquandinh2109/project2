<?php 
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
				        <form class="form-horizontal form-login">
				            <h2><span>Thông tin tài khoản</span></h2>
				            <div class="form-group">
				                <label for="Code" class="col-sm-4 control-label">Tên đăng nhập<span class="warning">(*)</span></label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control form-ctrl" required="true">
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="Email" class="col-sm-4 control-label">Email<span class="warning">(*)</span></label>
				                <div class="col-sm-8">
				                    <input type="email" class="form-control form-ctrl" required="true">
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="Password" class="col-sm-4 control-label">Mật khẩu<span class="warning">(*)</span></label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control form-ctrl" required="true">
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="RePassword" class="col-sm-4 control-label">Nhập lại mật khẩu<span class="warning">(*)</span></label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control form-ctrl">
				                </div>
				            </div>
				            <h2>Thông tin cá nhân</h2>
				            <div class="form-group">
				                <label for="Name" class="col-sm-4 control-label">Họ tên<span class="warning">(*)</span></label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control form-ctrl" required="true">
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
				            <div class="form-group form-inline">
				                <label class="col-sm-4 control-label">Ngày sinh</label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control datepicker form-ctrl">
				                </div>
				            </div>
				            <div class="form-group form-inline">
				                <label for="" class="col-sm-4 control-label">Điện thoại</label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control form-ctrl">
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="" class="col-sm-4 control-label">Địa chỉ</label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control form-ctrl">
				                </div>
				            </div>

				            <div class="form-group">
				                <div class="col-sm-offset-4 col-sm-8">
				                    <button type="submit" class="submit-login-btn btn btn-default button-form">Đăng ký</button>
				                </div>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
			
<?php include 'templates/footer.php'; ?>