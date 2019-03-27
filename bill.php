<?php 
session_start();
require_once 'class/cartFacade.php';
$cart = new CartFacade();
$db = new Database();
$cartItems = $_SESSION['cart'];
$_SESSION['cart'] = array();	
// var_dump($cartItems);
if (isset($_SESSION['name'])) {
	$username = $_SESSION['name'];
	$cus = $db->findOne('CUSTOMER','CUSTOMER_USERNAME',"'$username'");
	$cus_id = $cus->CUSTOMER_ID;

}
if (isset($_POST['payment-submit'])) {
	$cusid = (isset($cus_id)?$cus_id:0);
	$address = $_POST['address'];
	$name = $_POST['fullname'];
	$phone = $_POST['phone'];
	$total = $_POST['total'];
	$pm = $_POST['pm'];
	$email = $_POST['email'];
	$description = $_POST['description'];
	$db->executeQuery("INSERT INTO `orders` (`customer_id`, `orders_address`, `orders_name`, `orders_phone`, `orders_status`, `orders_price`, `orders_method`, `orders_email`, `orders_description`) VALUES ('$cusid', '$address', '$name', '$phone', '1', '$total', '$pm', '$email', '$description')");
	
	$thisOrderID = $db->getNewestOrdersID();
	foreach ($cartItems as $item) {
		$db->executeQuery("INSERT INTO `order_detail` (`orders_id`, `cosmetic_id`, `order_detail_quantity`) VALUES ('$thisOrderID', '".$item->cosmetic->cosmetic_id."', '$item->quantity')");
	}
	$pagename= 'Hóa đơn';
	include 'templates/header.php';



 ?>
	<div class="body-page">
		<div class="container">
		    <span>Trang chủ</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Hóa đơn</span>
			<h1 class="title-line"><span>Hóa đơn</span></h1>
			<form action="bill.php" method="post">
				<div class="row">
					<div class="col-sm-7">
						<div class="bill">
							<h2>Chi tiết đơn hàng</h2>
							<table class="table-bill">
								<thead>
									<th>Sản phẩm</th>
									<th>tổng cộng</th>
								</thead>
								<tfoot>
									<tr>
										<td>Phương thức thanh toán</td>
										<td class="price"><?=($_POST['pm']=="COD")?"COD <strong style=\"color: black;\">35.000 ₫</strong>":"Chuyển khoản <strong style=\"color: black;\">30.000 ₫</strong>"?></td>
									</tr>
									<tr>
										<th>Tổng cộng</th>
										<th class="price"><?=$total?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach ($cartItems as $item){ ?>
									<tr>
										<td><span><?=$item->cosmetic->cosmetic_title?></span> <span style="color: #ccc">x</span> <span style="color: #ccc"><?=$item->quantity?></span></td>
										<td class="price"><?=$item->cosmetic->cosmetic_price*$item->quantity?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>						
							<h2 style="margin-top: 15px;">Địa chỉ thanh toán</h2>
							<p><?=$address?></p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="thanksfororder">
							<h3>Cảm ơn bạn, đơn hàng của bạn đã được nhận</h3>
							<ul>
								<li>Mã đơn hàng: <span><?=$thisOrderID?></span></li>
								<li>Ngày: <span><?=orderdate($thisOrderID)?></span></li>
								<li>Email: <span><?=$email?></span></li>
								<li>Tổng cộng: <span><?=$total?></span></li>
								<li>Phương thức thanh toán: <span><?=$pm?></span></li>
							</ul>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>


<?php include 'templates/footer.php'; 
	
}
function orderdate($abcd){
	$db = new Database();
	$obj = $db->findOne('orders','orders_id',"'$abcd'");
	return date('d-m-Y',strtotime($obj->orders_date));;
}
 ?>