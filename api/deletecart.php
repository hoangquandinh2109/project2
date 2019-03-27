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
$db = new Database();

$data = json_decode(file_get_contents("php://input"));
if (!empty($data->cosmetic_id)) {
	if($cart->removeFromCart($db->findOne('cosmetic','cosmetic_id',$data->cosmetic_id))){
   // set response code - 201 created
        http_response_code(200);
 
        // tell the user
        echo json_encode(array("message" => "item was create. $data->cosmetic_title"));
    }else{
    	http_response_code(400);
        echo json_encode("some things wrong");
    }
}

?>