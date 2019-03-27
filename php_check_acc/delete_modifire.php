<?php

include './connect_sever.php';
$id = $_GET['id'];
$sql = "delete from admin where ADMIN_ID='$id'";
if($id==null){
    header("location:../admin/admin.php");
}else{
if (mysqli_query($conn, $sql)) {
    echo'<script>window.location="../admin/admin.php"</script>';
}}
?>