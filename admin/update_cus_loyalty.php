<?php
include '../php_check_acc/connect_sever.php';
session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
$id = $_GET['id'];
if (isset($_POST['update_loyalty'])) {
    $loyalty = $_POST['loyalty'];
    $sql = "update customer set CUSTOMER_LOYALTY='$loyalty' where CUSTOMER_ID='$id'";
    if (mysqli_query($conn, $sql)) {
         echo'<script>alert("cập nhật thành công");window.location="../admin/customer_list.php";</script>';
    }
}
include 'templates/header.php';
?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Cập nhật khách hàng thân thiết</h1>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Cập nhật khách hàng thân thiết</h6>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post">                                  
                                    <div class="form-group">
                                        <label class="control-label " for="product">Trở thành khách hàng thân thiết:</label>
                                        <div class="">
                                            <select class="form-control form-ctrl" name="loyalty">
                                                <option value="1" label="Có" selected="selected"></option>
                                                <option value="0" label="Không"></option>
                                            </select>
                                        </div>
                                    </div>                                   
                                    <div class="form-group"> 
                                        <button type="submit" name="update_loyalty" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus-circle"></i>
                                            </span>
                                            <span class="text">Cập nhật</span>
                                        </button>
                                    </div>
                                    <script language="javascript" src="js_tien/check_acc_admin.js"></script>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                    <?php include 'templates/footer.php'; ?>
