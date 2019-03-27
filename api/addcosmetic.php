<?php 
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once '../class/database.php';
$db = new Database();
$data = json_decode(file_get_contents("php://input"));
if (!empty($data->cosmetic_title)) {
	$db->executeQuery("INSERT INTO `cosmetic` (`cosmetic_title`, `category_id`, `cosmetic_price`, `cosmetic_rate`, `brand_id`, `cosmetic_picture`, `cosmetic_desciption`) VALUES ('$data->cosmetic_title', '$data->category_id', '$data->cosmetic_price', '$data->cosmetic_rate', '$data->brand_id', '$data->cosmetic_picture', '$data->cosmetic_desciption');");
   // set response code - 201 created
        http_response_code(201);
 
        // tell the user
        echo json_encode(array("message" => "Product was created.".$data->cosmetic_title));
}
 ?>