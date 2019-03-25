<?php

include './connect_sever.php';
$id = $_GET['id'];
$sql = "delete from customer where CUSTOMER_ID='$id'";
if (mysqli_query($conn, $sql)) {
    echo'<script>window.location="../admin/customer_list.php"</script>';
}
?>