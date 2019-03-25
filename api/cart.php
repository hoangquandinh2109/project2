<?php 
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
require_once '../class/cartFacade.php';
$cart = new CartFacade();
$db = new Database();
// if (isset($_SESSION['cart'])) {
	// $cart->removeFromCart(1);
	$cartItems = array_values($cart->getAllCartItems());
 // http_response_code(200);
 
    // show products data in json format
    echo json_encode($cartItems);

// echo "<pre>";	
//     var_dump($cartItems);
// echo "</pre>";	
    // session_destroy();		
// }
 ?>
 