<?php 
session_start();
$pagename="Sản phẩm";
include 'templates/header.php'; ?>
	<div class="body-page">
		<div class="container">
		    <span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Sản phẩm</span>
		    
			<h1 class="title-line"><span>Sản phẩm</span></h1>
			<div class="product-block product-grid clearfix">
				<?php
				require_once 'class/database.php';
				$db = new Database();
				$cosmetics = $db->getAll('cosmetic');;
				 foreach ($cosmetics as  $cosmetic) { ?>
				<div class="col-md-3 col-sm-3 col-xs-12 product-item-box">
					<div class="product-item">
						<span class="hot">Hot</span>
						<a href="#" class="product-image">
							<img src="http://beautymax.runtime.vn/Uploads/shop302/files/LamSach/ls6.png" alt="">
						</a>
						<div class="product-info">
							<p class="product-title"><a href="#"><?=$cosmetic->cosmetic_title?></a></p>
							<div class="price">
	                            <span class="price-new"><?=$cosmetic->cosmetic_price?>&nbsp;₫</span>
	                        </div>
	                        <div style="display: none;" class="cosmetic-id"><?=$cosmetic->cosmetic_id?></div>
	                        <button class="buy-product" >Mua</button>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- <div class="col-md-3 col-sm-3 col-xs-12 product-item-box">
					<div class="product-item">
						<span class="new">Mới</span>
						<a href="#" class="product-image">
							<img src="http://beautymax.runtime.vn/Uploads/shop302/files/TrangDa/td1.jpg" alt="">
						</a>
						<div class="product-info">
							<p class="product-title"><a href="#">OHUI white extreme VIP</a></p>
							<div class="price">
	                            <span class="price-new">4.300.000&nbsp;₫</span>
	                        </div>
	                        <a class="buy-product" href="">Mua</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 product-item-box">
					<div class="product-item">
						<span class="promotion">-3%</span>
						<a href="#" class="product-image">
							<img src="http://beautymax.runtime.vn/Uploads/shop302/files/TrangDa/td2.png" alt="">
						</a>
						<div class="product-info">
							<p class="product-title"><a href="#">OHUI white extreme VIP</a></p>
							<div class="price">
	                            <span class="price-new">4.300.000&nbsp;₫</span>
	                        </div>
	                        <a class="buy-product" href="">Mua</a>
						</div>
					</div>
				</div> -->
			</div>
			<div class="product-navigation clearfix">
	            <ul class="pagination">
	                <li>
	                    <a href="?page=1" aria-label="Previous">
	                        <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
	                    </a>
	                </li>
	                        <li class="active"><a href="?page=1">1</a></li>
	                        <li><a href="?page=2">2</a></li>
	                        <li><a href="?page=3">3</a></li>
	                <li>
	                    <a href="?page=3" aria-label="Next">
	                        <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
	                    </a>
	                </li>
	            </ul>
	        </div>

<?php include 'templates/footer.php'; ?>