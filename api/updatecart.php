<?php
// required headers
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once '../class/cartFacade.php';
$cart = new CartFacade();
$data = json_decode(file_get_contents("php://input"));
$i = 0; $j = 0; 
if (!empty($data[0]->quantity) && !empty($data[0]->cosmetic)) {
	foreach ($data as $value) {
		if($cart->editCart($i++, $value->quantity)){
			$j++;
		}
	}
	if ($j == $i) {
		http_response_code(200);
		echo json_encode(array("message" => "Product was updated.")); 
		$i = $j =0;
	}
}
?>