<?php
include '../php_check_acc/connect_sever.php';
include 'adminvip.php';
//cm3
session_start();
require_once '../class/database.php';
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
$pagename = "Quản lý nhân viên";
include 'templates/header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách nhân viên</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách nhân viên</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Chức vu</th>
                            <th>Thao tác</th>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>

                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>

                            <th>Chức vụ</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $sql = "select * from admin";
                        $sqlr = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_row($sqlr)) {
                            ?>
                            <tr>
                                <td><?php echo$row[0] ?></td>
                                <td><?php echo$row[1] ?></td>

                                <td><?php echo$row[3] ?></td>

                                <td><?php echo$row[5] ?></td>
                                <td><?php echo$row[6] ?></td>
                                <td><?php echo$row[4] ?></td>
                                <td><?php
                                    if ($row[7] == 0) {
                                        echo "Admin";
                                    }
                                    if ($row[7] == 1) {
                                        echo "Ql khách hàng";
                                    }
                                    if ($row[7] == 2) {
                                       echo "QL phản hồi";
                                    }
                                    if ($row[7] == 3) {
                                        echo "QL sản phẩm";
                                    }
                                    if ($row[7] == 4) {
                                        echo "QL bình luận";
                                    }                                  
                                    ?></td>
                                <td>
                                    <?php if ($_SESSION['adminname'] == $abkjlskjdlfkjlluser && $_SESSION['adminpass'] == $ksdjfldksjflsdkjpass) { ?>
                                        <a href ="../php_check_acc/delete_modifire.php?id=<?php echo $row[0] ?> " class = "btn btn-danger btn-circle btn-sm">
                                            <i class = "fas fa-trash"></i>
                                        </a>
                                        <a href="../admin/update_Employee.php?id=<?php echo $row[0] ?>" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <?php
                                    } else {
                                        if ($row[7] != 0) {
                                            ?>
                                            <a href ="../php_check_acc/delete_modifire.php?id=<?php echo $row[0] ?> " class = "btn btn-danger btn-circle btn-sm">
                                                <i class = "fas fa-trash"></i>
                                            </a>
                                            <a href="../admin/update_Employee.php?id=<?php echo $row[0] ?>" class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php include 'templates/footer.php'; ?>