<!DOCTYPE html>
<html>
<head>
	<title><?= $pagename ? $pagename : '' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="assets/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/cart.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="assets/css/orders.css">
	<link type="text/css" rel="stylesheet" href="resources/jquery-ui/jquery-ui.min.css" />
	<?= ($pagename == "Trang chủ")?"
	<style>
		.mcc-home{
	display: block;}
	</style>":''?>
</head>
<body>
	<div class="header-page">
		<section class="head-line">
			<div class="container">
				<div class="hotline">
					<i class="fas fa-phone"></i><span>0978954684</span>
				</div>
				<div class="function">
					<ul>
						<?php if (isset($_SESSION['name'])){ ?>
						<li><a href="#"><i class="fas fa-user"></i><?=$_SESSION['name']?></a></li>
						<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
						<?php } else{?>
						<!-- <li><a href="#"><i class="far fa-edit"></i>Kiểm tra đơn hàng</a></li> -->
						<!-- <li><a href="#"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a></li> -->
						<li><a href="dangnhap.php"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a></li>
						<li><a href="dangky.php"><i class="fas fa-user-plus"></i>Đăng ký</a></li>
						<?php }  ?>
					</ul>
				</div>
			</div>
		</section>
		<section class="logo-line">
			<div class="container">
				<div class="logo">
					<a href=""><img src="img/Logo.png" alt=""></a>
				</div>
				<div class="search-form">
					<form action="">
						<input class="form-ctrl" type="text">
						<select class="form-ctrl" name="" >
			                <option value="0" selected="selected">Tất cả</option>
			                <option value="137234">OHUI Trang điểm</option>
			                <option value="137235">OHUI Làm sạch</option>
			                <option value="137236">OHUI Trắng Da</option>
			                <option value="137237">OHUI Tái Sinh Da</option>
			                <option value="137238">OHUI Chống Nắng</option>
			                <option value="137239">OHUI Dưỡng Da</option>
		                </select>
		                <button class="button-form" type="submit"><i class="fas fa-search"></i></button>
		            </form>
				</div>
				<div class="cart">
					<div class="cart-function">
						<a href="cart.php"><i class="fas fa-shopping-cart"></i><span data-bind="text: number"></span></a>
					</div>
				</div>
			</div>
		</section>
		<section class="navigation">
			<div class="container">
				<nav>
					<ul class="clearfix">
						<li id="menu-cate-cosmetic">
							<p>Danh Mục Sản Phẩm</p><i class="fas fa-list"></i>
							<ul class="menu-cate-content <?=($pagename == 'Trang chủ')?'mcc-home':''?>">
                                <li><a href="#"><i class="fas fa-chevron-right"></i> OHUI Trang điểm</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> OHUI Làm sạch</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> OHUI Trắng Da</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> OHUI Tái Sinh Da</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> OHUI Chống Nắng</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> OHUI Dưỡng Da</a></li>
                            </ul>
						</li>
						<li><a <?=($pagename == 'Trang chủ') ? 'class="active"' : '' ;?> href="index.php">Trang chủ</a></li>
						<li><a <?=($pagename == 'Giới thiệu') ? 'class="active"' : '' ;?> href="gioithieu.php">Giới Thiệu</a></li>
						<li><a <?=($pagename == 'Sản phẩm') ? 'class="active"' : '' ;?> href="sanpham.php">Sản Phẩm</a></li>
						<li><a <?=($pagename == 'Tin tức') ? 'class="active"' : '' ;?> href="tintuc.php">Tin Tức</a></li>
						<li><a <?=($pagename == 'Liên Hệ') ? 'class="active"' : '' ;?> href="lienhe.php">Liên Hệ</a></li>
						<li class="hidden scroll-cart">
							<a href="cart.php"><i class="fas fa-shopping-cart"></i>Giỏ hàng <span data-bind="text: number"></span></a>
							<div class="cartitems">
								<table data-bind="foreach: cartitems">
									<tr class="product-row-cart">
										<td class="cart-product">
											<a data-bind="click: $parent.deleteCartItem" class="btn-remove-cart-item" href="">x</a>
											<img src="https://thegioirubik.com/wp-content/uploads/2016/09/Moyu-Aolong-Plus1-510x510.jpg" alt="">
										</td>
										<td class="cart-product-title">
											<a data-bind="text: cosmetic.cosmetic_title" href="#">dien thoai iphone</a><span style="color: #ccc;"> x </span><span style="color: #ccc;" data-bind="text: quantity"></span><br><span data-bind="text: cosmetic.beauty_price">
										</td>
									</tr>
								</table>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</div>