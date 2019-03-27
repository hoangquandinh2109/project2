<?php 
session_start();
require_once '../class/cartFacade.php';
$cart = new CartFacade();
$db = new Database();
$cartItems = array_values($cart->getAllCartItems());

$db->executeQuery("INSERT INTO `orders` (`customer_id`, `orders_address`, `orders_name`, `orders_phone`, `orders_status`, `order_price`) VALUES ('1', '123 CMT8', 'Quan', '12321321', '1', '123')");
$thisOrderID = $db->getNewestOrdersID();
foreach ($cartItems as $item) {
	$db->executeQuery("INSERT INTO `order_detail` (`orders_id`, `cosmetic_id`, `order_detail_quantity`) VALUES ('$thisOrderID', '".$item->cosmetic->cosmetic_id."', '$item->quantity')");
}
$_SESSION['cart'] = array();
 ?>
