<?php 
require_once 'class/database.php';
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: .");
}
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $db->executeQuery("UPDATE `orders` SET `orders_status` = '3' WHERE `orders`.`orders_id` = $id;");
  header("Location: myorders.php");

}?>
