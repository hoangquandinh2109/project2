<?php 
session_start();
$pagename= 'Giỏ hàng';
include 'templates/header.php'; ?>
	<div class="body-page">
		<div class="container">
		    <span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Giỏ hàng</span>
			<h1 class="title-line"><span>Giỏ hàng</span></h1>
			<div class="row cart-section">
				<div class="col-sm-7 left-column">
					<div>
						<form action="">
							<table class="cart">
								<thead>
									<tr class="cart-head-row">
										<th>SẢN PHẨM</th>
										<th>GIÁ</th>
										<th>SỐ LƯỢNG</th>
									</tr>
								</thead>
								<tbody data-bind="foreach: cartitems">
									<tr class="product-row-cart">
										<td class="cart-product">
											<a data-bind="click: $parent.deleteCartItem" class="btn-remove-cart-item" href="">x</a>
											<img src="https://thegioirubik.com/wp-content/uploads/2016/09/Moyu-Aolong-Plus1-510x510.jpg" alt="">
											<a class="title-product" data-bind="text: cosmetic.cosmetic_title" href="#"></a>
										</td>
										<td class="cart-price"><span data-bind="text: cosmetic.beauty_price"></span></td>
										<td>
											<button type="button" class="button-quantity minus-quantity">-</button><input min="1" max="50" type="number" data-bind="value: quantity, valueUpdate: 'keyup', event: { change: $parent.check, keyup: $parent.check  }" autocomplete="off" class="input-quantity quantity"><button type="button" class="button-quantity plus-quantity">+</button>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="cart-total-row">
										<td colspan="3" class="clearfix">
											<div class="total-price-title">
												<p>Tổng cộng</p>
											</div>
											<div class="total-price">
												<p data-bind="text: total"></p>
											</div>
										</td>
									</tr>
								</tfoot>
								<tr class="cart-button-row">
									<td colspan="3">
										<div class="button-cart"><a href="">← Tiếp tục xem sản phẩm</a></div>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<div class="col-sm-5 right-column">
					<div>
						<form action="orders.php" method="post">
							<table class="cart-bill">
								<tr class="cart-bill-head">
									<td>Thành Tiền</td>
								</tr>
								<tr class="payment-method-row">
									<td>
										<p>Phương thức thanh toán</p>
										<div><input required name="pm" data-bind="checked: methodpayment, click: recalculate" type="radio" class="payment-method" value="35000" id="pmone"><label for="pmone" >COD 35.000&nbsp;₫</label></div>
										<div><input required name="pm" data-bind="checked: methodpayment, click: recalculate" type="radio" class="payment-method" value="30000" id="pmtwo"><label for="pmtwo" >Chuyển khoản 30.000&nbsp;₫</label></div>
									</td>
								</tr>
								<tr class="bill-total-row">
									<td class="clearfix">
										<div class="total-price-title">
											<p>Tổng cộng</p>
										</div>
										<div class="total-price">
											<p data-bind="text: total"></p>
										</div>
									</td>
								</tr>
								<tr class="submit-cart-bill">
									<td>
										<input name="total" type="hidden" data-bind="value: total">
										<button type="submit" name="payment" >Thanh Toán</button>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
<?php include 'templates/footer.php'; ?>
