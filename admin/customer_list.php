<?php
include '../php_check_acc/connect_sever.php';
session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
$pagename='Danh sách khách hàng';
include 'templates/header.php';
?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Danh sách khách hàng</h6>
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
                                                <th>Thân thiết</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Họ tên</th>
                                                <th>Email</th>
                                                <th>SDT</th>
                                                <th>Địa chỉ</th>
                                                <th>Thân thiết</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </tfoot>

                                        <tbody >

                                            <?php
                                            $sql = "select * from customer";
                                            $sqlr = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_row($sqlr)) {
                                                ?>                                
                                                <tr>
                                                    <td><?php echo$row[0] ?></td>
                                                    <td><?php echo$row[1] ?></td>

                                                    <td><?php echo$row[3] ?></td>

                                                    <td><?php echo$row[5] ?></td>

                                                    <td><?php echo$row[6] ?></td>
                                                    <td><?php echo$row[9] ?></td>
                                                    <td><?php
                                                        if ($row[10] == 1) {
                                                            echo "Có";
                                                        } else {
                                                            echo"Không";
                                                        }
                                                        ?></td>
                                                    <td>
                                                        <a href ="../php_check_acc/delete_cus.php?id=<?php echo $row[0] ?> " class = "btn btn-danger btn-circle btn-sm">
                                                            <i class = "fas fa-trash"></i>
                                                        </a>
                                                        <a href="../admin/update_cus_loyalty.php?id=<?php echo $row[0] ?>" class="btn btn-info btn-circle btn-sm">
                                                            <i class="fas fa-pen"></i>
                                                        </a>

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