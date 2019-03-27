<?php
include '../php_check_acc/connect_sever.php';
include 'adminvip.php';
require_once '../class/database.php';

session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
$id = $_GET['id'];
$db = new Database();
if (isset($_SESSION['adminname'])) {
    if ($_SESSION['adminname'] != $abkjlskjdlfkjlluser && $_SESSION['adminpass'] != $ksdjfldksjflsdkjpass) {
        $adminname = $_SESSION['adminname'];
        $abc = $db->getAllWhere('admin', 'admin_username', "'$adminname'");
        $admin = $abc[0];
        if ($admin->ADMIN_ROLE != 0) {
            header("Location: index.php");
        }
    }
} else {
    header("Location: index.php");
}
if (isset($_POST['update_role'])) {
    $role = $_POST['roletxt'];
    $sql = "update admin set ADMIN_ROLE='$role' where ADMIN_ID='$id'";
    if (mysqli_query($conn, $sql)) {
        echo'<script>alert("cập nhật thành công");window.location="../admin/admin.php";</script>';
    }
}
include 'templates/header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Cập nhật chức vụ nhân viên</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cập nhật chức vụ nhân viên</h6>
        </div>
        <div class="card-body">
            <form class="form-horizontal" method="post">                                  
                <div class="form-group">
                    <label class="control-label " for="product">Thay đổi chức vụ:</label>
                    <div class="">
                        <select class="form-control form-ctrl" name="roletxt">
                            <?php if ($_SESSION['adminname'] == $abkjlskjdlfkjlluser && $_SESSION['adminpass'] == $ksdjfldksjflsdkjpass) { ?>
                                <option value="0" label="Admin" selected="selected"></option><?php } ?>
                            <option value="1" label="Quản lí khách hàng" ></option>              
                            <option value="2" label="Quản lí đơn hàng" ></option>   
                            <option value="3" label="Quản lí sản phẩm" ></option>  
                            <option value="4" label="Quản lí bình luận" ></option>     
                            <option value="5" label="Quản lí phản hồi" ></option>     
                        </select>
                    </div>
                </div>                                   
                <div class="form-group"> 
                    <button type="submit" name="update_role" class="btn btn-primary btn-icon-split">
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
