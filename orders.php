<?php  session_start(); 
if (!isset($_POST['payment'])){
	header("Location: .");
}
$pagename= 'Thanh toán';
if (isset($_SESSION['name'])) {
	$namess = $_SESSION['name'];
	require_once 'class/database.php';
	$db = new Database();
	$cus = $db->findOne('customer','CUSTOMER_USERNAME',"'$namess'");
	$address = $cus->CUSTOMER_ADDRESS;
	$phone = $cus->CUSTOMER_PHONE;
	$name = $cus->CUSTOMER_NAME;
	$email = $cus->CUSTOMER_EMAIL;
}
include 'templates/header.php'; ?>
	<div class="body-page">
		<div class="container">
		    <span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Thanh Toán</span>
			<h1 class="title-line"><span>Thanh Toán</span></h1>
			<form action="bill.php" method="post">
				<div class="row">
					<div class="col-sm-7">
						<div class="payment-infomation">
								<input type="hidden" name="pm" value="<?=($_POST['pm']==35000)?"COD":"Chuyển khoản"?>">
								<input type="hidden" name="total" value="<?=$_POST['total']?>">
								<h3 class="big-text">Thanh toán và giao hàng</h3>
								<div class="input-row">
									<input class="payment-form payment-form-left" type="text" name="address" <?=(isset($_SESSION['name']))?"readonly":''?> placeholder="Địa chỉ" value="<?=(isset($_SESSION['name']))?$address:''?>">
									<input class="payment-form payment-form-right" type="text" name="phone" <?=(isset($_SESSION['name']))?"readonly":''?> placeholder="Số điện thoại" value="<?=(isset($_SESSION['name']))?$phone:''?>">
								</div>
								<div class="input-row">
									<input class="payment-form payment-form-left" type="text" name="fullname" <?=(isset($_SESSION['name']))?"readonly":''?> placeholder="Họ tên" value="<?=(isset($_SESSION['name']))?$name:''?>">
									<input class="payment-form payment-form-right" type="email" name="email" <?=(isset($_SESSION['name']))?"readonly":''?> placeholder="email" value="<?=(isset($_SESSION['name']))?$email:''?>">
								</div>
								<h3 class="big-text">thông tin bổ sung</h3>
								<textarea placeholder="Ghi chú" class="payment-form" name="description" cols="30" rows="10"></textarea>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="bill">
							<h2>Đơn hàng của bạn <span></span></h2>
							<table class="table-bill">
								<thead>
									<th>Sản phẩm</th>
									<th>tổng cộng</th>
								</thead>
								<tfoot>
									<tr>
										<td>Phương thức thanh toán</td>
										<td class="price"><?=($_POST['pm']==25000)?"COD":"Chuyển khoản"?></td>
									</tr>
									<tr>
										<th>Tổng cộng</th>
										<th class="price"><?=$_POST['total']?></th>
									</tr>
								</tfoot>
								<tbody data-bind="foreach: cartitems">
									<tr>
										<td><span data-bind="text: cosmetic.cosmetic_title"></span> <span style="color: #ccc">x</span> <span style="color: #ccc" data-bind="text: quantity"></span></td>
										<td class="price" data-bind="text: cosmetic.total_price"></td>
									</tr>
								</tbody>
							</table>
							<h4>Chuyển khoản ngân hàng</h4>
							<p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn như một phần để tham khảo khi thanh toán. Đơn hàng của bạn sẽ không được vận chuyển cho tới khi tiền được gửi vào tài khoản của chúng tôi.</p>
							
								<button class="order-button" name="payment-submit" type="submit">Xác nhận thanh toán</button>
							
						</div>
					</div>
				</div>
			</form>

<?php include 'templates/footer.php'; ?>

<script>
	 
</script>