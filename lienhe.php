<?php 
	$pagename = 'Liên hệ';
	session_start();
include 'templates/header.php'; ?>

	<div class="body-page">
		<div class="container">
			<span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Liên hệ</span></span>
			<div class="clearfix">
				<div class="side-bar">
					<h1 class="title-line"><span>Hỗ trợ trực tuyến</span></h1>
					<div>
						<div class="support-hotline">
			                HOTLINE<br><span>0975988644</span>
			            </div>
					</div>
				</div>
				<div class="main-login-content">
					<h1 class="title-line"><span>Thông tin liên hệ</span></h1>
					<div class="row">
						<div class="col-sm-3"><img style="width: 100%;" src="img/Logo.png" alt=""></div>
						<div class="col-sm-9">
							<h6></h6>
							<ul id="thongtinlienhetranglienhe">
								<li><i class="fas fa-map-marker-alt"></i><strong>Địa chỉ: </strong>182 CMT8</li>
								<li><i class="fas fa-phone"></i><strong>Điện thoại: </strong>0973822839</li>
								<li><i class="fas fa-mobile-alt"></i><strong>Hotline: </strong>0993002933</li>
								<li><i class="fas fa-fax"></i>	<strong>Fax: </strong>0909090909</li>
								<li><i class="fas fa-envelope"></i><a href="mailto: info@beautymax.com">info@beautymax.com</a></li>
							</ul>
						</div>
					</div>
					<div class="hr"></div>
					<h4 style="color: #02a3e8;">FEEDBACK</h4>
					<p>Vui lòng điền vào form dưới để góp ý dịch vụ của chúng tôi. Xin chân thành cảm ơn</p>
					<div class="row">
						<div class="col-sm-7">
							<form action="" method="post">
								<textarea placeholder="Nội dung Feedback" style="height: 140px;width: 100%;" name="" id="" cols="30" rows="10"></textarea>
								<button class="submit-login-btn btn btn-default button-form" type="submit">Gửi</button>
							</form>
						</div>
						<div class="col-sm-5">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.419233804657!2d106.67717431409184!3d10.77916799231967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f262b13d979%3A0x87ac5d14f9d93b43!2zMTgyIEPDoWNoIE3huqFuZyBUaMOhbmcgOCwgUGjGsOG7nW5nIDEwLCBRdeG6rW4gMywgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1553697372246" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
<?php include 'templates/footer.php'; ?>
