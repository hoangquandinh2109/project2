<div class="brand">
				<div class="owl-carousel">
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt1.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt2.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt3.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt4.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt5.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt6.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt1.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt2.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt3.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt4.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt5.png"></div>
				  <div class="brand-item"><img src="http://beautymax.runtime.vn/Uploads/shop302/files/dt6.png"></div>
				</div>
			</div>	
		</div>
	</div>
	<div class="footer-page">
		<div class="container">
			<div class="row">
				<div class="footer-box col-md-3 col-sm-12 col-xs-12">
					<h3><span>Giới thiệu</span></h3>
					<ul>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Lĩnh vực hoạt động</a></li>
                        <li><a href="#">Hỏi đáp</a></li>
                        <li><a href="#">Quy chế hoạt động</a></li>
                        <li><a href="#">Tuyển dũng</a></li>
                    </ul>
				</div>
				<div class="footer-box col-md-3 col-sm-12 col-xs-12">
					<h3><span>Trợ giúp</span></h3>
					<ul>
                        <li><a href="">Hướng dẫn thanh toán</a></li>
                        <li><a href="">Quy định đổi trả</a></li>
                        <li><a href="">Chính sách bán hàng</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Quy định thảo luận</a></li>
                    </ul>
				</div>
				<div class="footer-box col-md-3 col-sm-12 col-xs-12">
					<h3><span>Thông tin công ty</span></h3>
					<ul>
						<li>BeautyMax</li>
						<li><p class="info-copany-footer"><i class="fas fa-map-marker-alt"></i>182 CMT8 P.5 Q.10 TPHCM</p></li>
						<li><p class="info-copany-footer"><i class="fas fa-envelope"></i>beautymax@info.vn</p></li>
						<li><p class="info-copany-footer"><i class="fas fa-phone"></i>Phone: 0975985688</p></li>
					</ul>
				</div>
				<div class="footer-box col-md-3 col-sm-12 col-xs-12">
					<h3><span>Facebook</span></h3>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffptcorp%2F&tabs=timeline&width=292&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="292" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
			</div>
		</div>
	</div>




	<!-- Script -->
	
	<script src="assets/js/jquery.min.js"></script>
    <script src="resources/js/jquery-ui.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/js/knockout-3.5.0.js"></script>
    <script src="assets/js/app.js"></script>
	<script src="assets/js/owlcarousel.js"></script>
	<script>
	  $(document).ready(function(){

			$(".datepicker").datepicker({
                dateFormat: 'dd-mm-yy'
            });
	   var navHeight = $('.navigation').offset().top;
			navscroll(navHeight);
	   $(document).bind('scroll', function() {
			navscroll(navHeight);
		});
	   function navscroll(navHeight){
	   	 if ($(document).scrollTop() > navHeight) {
				 $('.navigation').addClass('fixed');
				 $('.logo-line').addClass('nav-fixed');
				 $('.menu-cate-content').removeClass('mcc-home');
				 $('.scroll-cart').removeClass('hidden');
			 }
			 else {
				 $('.navigation').removeClass('fixed');
				 $('.logo-line').removeClass('nav-fixed');
				 $('.menu-cate-content').addClass('mcc-home');
				 $('.scroll-cart').addClass('hidden');
			 }
	   }
	});
	</script>
</body>
</html>