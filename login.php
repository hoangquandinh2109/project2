<?php 
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
				        <form class="form-horizontal form-login">
				            <div class="form-group">
				                <label for="Username" class="col-sm-4 control-label">Tên đăng nhập</label>
				                <div class="col-sm-8">
				                    <input type="email" class="form-control form-ctrl" required="required">
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="Password" class="col-sm-4 control-label">Mật khẩu</label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control form-ctrl" required="required">
				                </div>
				            </div>
				            
				            <div class="form-group">
				                <div class="col-sm-offset-4 col-sm-8">
				                    <button type="submit" class="submit-login-btn btn btn-default button-form">Đăng nhập</button>
				                </div>

				            </div>
				        </form>
				    </div>
				</div>
			</div>
<?php include 'templates/footer.php'; ?>