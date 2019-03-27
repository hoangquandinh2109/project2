<?php
include '../php_check_acc/connect_sever.php';
include 'adminvip.php';
session_start();
require_once '../class/database.php';
    $db = new Database();
    if (isset($_SESSION['adminname'])) {
        if ($_SESSION['adminname'] != $abkjlskjdlfkjlluser && $_SESSION['adminpass'] != $ksdjfldksjflsdkjpass) {
            $adminname = $_SESSION['adminname'];
            $abc = $db->getAllWhere('admin','admin_username',"'$adminname'");
            $admin = $abc[0];
            if ($admin->ADMIN_ROLE == 0 || $admin->ADMIN_ROLE == 1) {
               
            }else{
                 header("Location: index.php");
            }
        } 
    }else{
        header("Location: index.php");
        
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
                                                    <td><?php echo$row[8] ?></td>
                                                    <td>                                              
                                                        <?php
                                                        $check_loyalty="select ORDERS_ID from orders where customer_id='$row[0]'";
                                                        $update_loyalty="update customer set customer_loyalty='1' WHERE CUSTOMER_ID='$row[0]'";
                                                        if(mysqli_num_rows(mysqli_query($conn, $check_loyalty))>4){
                                                            mysqli_query($conn, $update_loyalty);
                                                        }
                                                        if ($row[9] == 1) {
                                                            echo "Có";
                                                        } else {
                                                            echo"Không";
                                                        }
                                                        ?></td>
                                                    <td>
                                                        <a href ="../php_check_acc/delete_cus.php?id=<?php echo $row[0] ?> " class = "btn btn-danger btn-circle btn-sm">
                                                            <i class = "fas fa-trash"></i>
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