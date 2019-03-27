<?php

include './connect_sever.php';
$id = $_GET['id'];
$sql = "delete from customer where CUSTOMER_ID='$id'; delete from orders where CUSTOMER_ID='$id'";
if($id==null){
    header("location../admin/customer_list.php");
}else{
if (mysqli_query($conn, $sql)) {
    echo'<script>window.location="../admin/customer_list.php"</script>';
}}
?>