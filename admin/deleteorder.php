<?php 
  include '../class/database.php';
  session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
  function deleteOrder($id){
	  $db = new Database();
	  $db->executeQuery("DELETE FROM `orders` WHERE `orders`.`orders_id` = $id");
	  $db->executeQuery("DELETE FROM `order_detail` WHERE `order_detail`.`orders_id` = $id");
	}
  if (isset($_GET['id'])) {
  	deleteOrder($_GET['id']);
  	header("Location: orders.php");
  }else{
  	header("Location: orders.php");
  }
 ?>